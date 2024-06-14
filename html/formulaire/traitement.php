<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href=form.css rel=stylesheet type=text/css/>
</head>
<body>
    
<?php

include "config.php";
//require_once "config.php";
echo "bonjour \n";
$server= $_SERVER["REQUEST_METHOD"];
if($server=="POST") {
    $nom=htmlspecialchars($_POST["nom"]);
    $prenom=$_POST["prenom"];
    $age=$_POST["age"];
   /* echo "\n";

echo $nom;
echo "\n";
echo "\n";

echo $prenom;
echo "\n";
echo "\n";

echo $age;*/
/*$fichier=fopen("form.csv","a");
fputcsv($fichier,[$nom,$prenom,$age]);
fclose($fichier);*/
$requete=pg_query($connect,"insert into personne(nom,prenom,age) values( '$nom','$prenom','$age')");
//$update=pg_query($connect,"update personne set nom='akoh' where prenom='$prenom'");
header("Location: index.php");

}


else if ($server=="GET"){
    header("Location: index.php");

}
?>



</body>
</html>
