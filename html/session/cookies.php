<?php
// Création d'un cookie nommé "moncookie" avec la valeur
// "Anthony" valable 7 jours
$validite = 7 * 24 * 60 * 60; // 7 jours en secondes
setcookie('moncookie', 'Anthony', time() + $validite);
echo($_COOKIE['moncookie']) ;
?>



