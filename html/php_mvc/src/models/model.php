<?php
namespace Src\Models;

class Model{
   protected static function recupEnv(string $fichier_env){
        $lines=file($fichier_env, FILE_IGNORE_NEW_LINES);
        //var_dump(self::$lines);
        foreach($lines as $line){
            list($name, $value) = explode("=", $line, 2);
            $_ENV[$name] = $value;
            

        }return $_ENV;
    }

    public function __construct(){

    }


    public static function connexion(){
        $_ENV=Model::recupEnv(__DIR__."/../../.env");
      //  var_dump($_ENV);
        try {
            $objetPdo=new \PDO('pgsql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'] . ';port=' . $_ENV['DB_PORT'], $_ENV['DB_USER'], $_ENV['DB_PWD']);        
            //new \PDO('pgsql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'] . ';port=' . $_ENV['DB_PORT'], $_ENV['DB_USER'], $_ENV['DB_PWD']);
        }
        catch(Exception $e){
            var_dump('Erreur : ' . $e->getMessage());
        }
        return $objetPdo;
    }
    public static function insertion(string $table,array $data){
        $conn=sef::connexion();
        $requete="insert into".$table."(".implode(", ",array_keys($data)).")"
        ."values(:".implode(",:",array_keys($data)).")";
        $prepaRequete=$objetPdo->prepare($requete);
        $prepaRequete->execute($data);
        return $objetPdo->lastInsertId();
    }

public static function selection(string $table,array $request=null){
    $conn=self::connexion();
    $reque="select * from ".$table;
    if(isset($request)){
        $reque.="where";
        $orderby="";
        foreach($request as $r){
            switch($r[0]):
                case "orderBy":
                    $orderby="oder by".htmlspecialchars($r[1]).htmlspecialchars($r[2]);
                    default:
                    $reque.= htmlspecialchars($r[0]) . htmlspecialchars($r[1]) . htmlspecialchars($r[2]); 
                    $reque .= " AND "; 
            endswitch;
        }
        $reque = substr($req, 0, -5); 
        $reque .= $orderby; 
        }
        $response = $conn->query($reque); 
        $data = $response->fetchAll(\PDO::FETCH_ASSOC); 
        return $data; 

}
}






































