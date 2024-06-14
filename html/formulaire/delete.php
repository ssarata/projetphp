<?php
    include("config.php");
    //session_start();
    $id_pers=(int) $_GET['id'];

    //$_SESSION['id']= $id_pers;
    //$id=$_SESSION['id'];
    $delete=pg_query($connect,"delete from personne where id=$id_pers");
    header("Location:index.php");