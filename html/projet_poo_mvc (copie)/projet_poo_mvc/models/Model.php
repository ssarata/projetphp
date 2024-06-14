<?php
namespace Src\Models;

class Model
{
    protected static function load_env(string $path)
    {
        $lines = file($path, FILE_IGNORE_NEW_LINES); // Lecture du fichier .env ligne par ligne dans un tableau

        foreach ($lines as $line) { // Parcours de chaque ligne du fichier .env
            list($name, $value) = explode("=", $line, 2); // Séparation de chaque ligne en clé et valeur
            $_ENV[$name] = $value; // Attribution de la valeur à la clé dans le tableau $_ENV
        }
        return $_ENV; // Retourne le tableau $_ENV contenant les variables d'environnement
    }
    public function __construct()
    { /** */
    }
    protected static function getDb()
    {
        $_ENV = Model::load_env(__DIR__ . "/../../.env"); // Chargement des variables d'environnement
        try {
            // Tentative de connexion à la base de données
            $bdd = new \PDO('pgsql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'] . ';port=' . $_ENV['DB_PORT'], $_ENV['DB_USER'], $_ENV['DB_PWD']);
        } catch (\Exception $e) {
            // En cas d'échec de connexion, affiche l'erreur
            die('Erreur : ' . $e->getMessage());
        }
        return $bdd; // Retourne l'objet PDO représentant la connexion à la base de données
    }

    protected static function dbCreate(string $table, array $data)
    {
        $bdd = self::getDb(); // Récupère la connexion à la base de données
        // Construction de la requête d'insertion
        $req = "INSERT INTO " . $table;
        $req .= " (" . implode(", ", array_keys($data)) . ")";
        $req .= " VALUES (:" . implode(", :", array_keys($data)) . ") ";
        $response = $bdd->prepare($req); // Prépare la requête
        $response->execute($data); // Exécute la requête en liant les valeurs
        return $bdd->lastInsertId(); // Retourne l'identifiant de la dernière insertion
    }

    protected static function dbDelete(string $table, array $data)
    {
        $bdd = self::getDb(); // Récupère la connexion à la base de données
        // Construction de la requête de suppression
        $req = "DELETE FROM " . $table . " WHERE " . array_keys($data)[0] . " = :" . array_keys($data)[0];
        $response = $bdd->prepare($req); // Prépare la requête
        $response->execute($data); // Exécute la requête en liant les valeurs
        return; // Retourne rien
    }

    protected static function dbFind(string $table, array $request = null)
    {
        $bdd = self::getDb(); // Récupère la connexion à la base de données
        $req = "SELECT * FROM " . $table; // Construction de la requête de sélection
        if (isset($request)) { // Si des conditions de recherche sont spécifiées
            $req .= " WHERE "; // Ajoute la clause WHERE à la requête
            $reqOrder = ''; // Initialise la clause ORDER BY
            foreach ($request as $r) { // Parcours des conditions de recherche
                switch ($r[0]): // Analyse de la première partie de la condition
                    case "orderBy": // Si c'est une clause ORDER BY
                        $reqOrder = " ORDER BY " . htmlspecialchars($r[1]) . "" . htmlspecialchars($r[2]); // Construction de la clause ORDER BY
                        break;
                    default: // Pour d'autres conditions
                        $req .= htmlspecialchars($r[0]) . htmlspecialchars($r[1]) . htmlspecialchars($r[2]); // Ajoute la condition à la requête
                        $req .= " AND "; // Ajoute le connecteur logique à la requête
                endswitch;
            }
            $req = substr($req, 0, -5); // Supprime le dernier " AND " de la requête
            $req .= $reqOrder; // Ajoute la clause ORDER BY à la requête
        }
        $response = $bdd->query($req); // Exécute la requête de sélection
        $data = $response->fetchAll(\PDO::FETCH_ASSOC); // Récupère les données sous forme de tableau associatif
        return $data; // Retourne les données
    }

    protected static function dbUpdate(string $table, array $data, string $idField = null)
    {
        $bdd = self::getDb(); // Récupère la connexion à la base de données
        $req = "UPDATE " . $table . " SET "; // Construction de la requête de mise à jour
        $whereIdString = " WHERE id = :id"; // Condition WHERE pour l'identifiant
        // Set des key = :value
        foreach ($data as $key => $value) { // Parcours des données à mettre à jour
            if ($key !== 'id') { // Sauf si la clé est 'id'
                $req .= "" . $key . " = :" . $key . ", "; // Ajoute la clé et le placeholder à la requête
            }
        }
        $req = substr($req, 0, -2); // Supprime la virgule et l'espace à la fin de la requête
        $req .= $whereIdString; // Ajoute la condition WHERE à la requête
        $response = $bdd->prepare($req); // Prépare la requête
        $params = []; // Initialise le tableau de paramètres
        foreach ($data as $key => $value) { // Parcours des données à mettre à jour
            if ($key !== 'id') { // Sauf si la clé est 'id'
                $params[':' . $key] = $value; // Ajoute la clé et la valeur au tableau de paramètres
            }
        }
        $params[':id'] = $data['id']; // Ajoute l'identifiant au tableau de paramètres
        return $response->execute($params); // Exécute la requête en liant les valeurs et retourne le résultat
    }
}
