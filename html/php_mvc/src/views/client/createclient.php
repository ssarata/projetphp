<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="/php_mvc/public/css/style.css">
</head>

<body>

    <div class="form">
        <a href="/php_mvc" class="back_btn"><img src="/php_mvc/public/images/back.png"> Retour</a>
        <h2>Ajouter un client</h2>
        <p class="erreur_message">
            <?php
            // si la variable message existe , affichons son contenu
            if (isset($message)) {
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>telephone</label>
            <input type="text" name="tel">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>