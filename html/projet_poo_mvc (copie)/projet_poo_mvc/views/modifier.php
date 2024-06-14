<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="/projet_poo_mvc/public/css/style.css">
</head>

<body>
    <div class="form">
        <a href="/projet_poo_mvc" class="back_btn"><img src="/projet_poo_mvc/public/images/back.png"> Retour</a>
        <h2>Modifier l'employé :
            <?php
            if (isset($e['nom'])) {
                echo $e['nom'];
            }
            ?>
        </h2>
        <p class="erreur_message">
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </p>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $e['id'] ?>">

            <label>Nom</label>
            <input type="text" name="nom" value="<?= $e['nom'] ?>">
            <label>Prénom</label>
            <input type="text" name="prenom" value="<?= $e['prenom'] ?>">
            <label>âge</label>
            <input type="number" name="age" value="<?= $e['age'] ?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>

</html>