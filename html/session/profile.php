<?php
// profile.php

// Démarrer la session (assurez-vous d'appeler session_start() au début de chaque page)
session_start();

// Récupérer le nom d'utilisateur depuis la variable de session
if (isset($_SESSION['username'])) {
    $utilisateur = $_SESSION['username'];
    echo "Bienvenue, $utilisateur !"; // Affiche le nom d'utilisateur
} else {
    echo "Veuillez vous connecter."; // Si l'utilisateur n'est pas connecté
}
?>