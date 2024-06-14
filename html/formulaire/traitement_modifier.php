<?php
    include "config.php";
    session_start();
    $id=$_SESSION['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];

    $update=pg_query($connect,"update personne set nom='$nom',prenom='$prenom',age=$age where id=$id");
    header("Location:index.php");