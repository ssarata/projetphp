<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="modi.css" rel="stylesheet" type="text/css">

</head>
<body>
    <?php 
        include "config.php";
        session_start();
        $id_pers=(int) $_GET['id'];

        $_SESSION['id']= $id_pers;
        $requete=pg_query($connect,"select * from personne where id= $id_pers");
        $row = pg_fetch_assoc($requete);?>
       
        <div class="update">
       

            <form class='container' action="traitement_modifier.php" method="post">
             
            <h1> modifier vos coordonnées</h1>
            <label for="nom">name</label>:
            <input type="text" id="nom" name="nom" value="<?php echo $row['nom'];?>" required/>
            
            <br/>
            <label for="prenom">prenom</label>:
            
            <input tye="text" id="prenom" name="prenom" value="<?php echo $row['prenom'];?>" required/>
            <br/>
            <label for="age">age</label>:
            <input type="integer" name="age" id="age" value="<?php echo $row['age'];?>"/>
            <br/>
            
          
            <input type="submit" value="valider" id="env"/>	
            </form>

        </div>
</body>
</html>