<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employés</title>
    <link rel="stylesheet" href="/projet_poo_mvc/public/css/style.css">
</head>

<body>
    <div class="container">
        <a href="/projet_poo_mvc/create" class="Btn_add"> <img src="/projet_poo_mvc/public/images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php
            if (count($employes) == 0) {
                //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                echo "Il n'y a pas encore d'employé ajouter !";
            } else {
                foreach ($employes as $e) {
                    ?>
                    <tr>
                        <td>
                            <?= $e['nom'] ?>
                        </td>
                        <td>
                            <?= $e['prenom'] ?>
                        </td>
                        <td>
                            <?= $e['age'] ?>
                        </td>
                        <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                        <td><a href="update?id=<?= $e['id'] ?>"><img src="/projet_poo_mvc/public/images/pen.png"></a></td>
                        <td><a href="delete?id=<?= $e['id'] ?>"><img src="/projet_poo_mvc/public/images/trash.png"></a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </div>
</body>

</html>