
<?php 
// Démarrer une session
session_start();

// Simuler un processus de connexion réussi
$utilisateur = "Alice"; // Nom d'utilisateur (vous pouvez le récupérer depuis un formulaire de connexion)

// Enregistrer le nom d'utilisateur dans la variable de session
$_SESSION['username'] = $utilisateur;

//setcookie('user_id', $user_id, time() + 3600, '/'); // Expire dans 1 heure
//$user_id = $_COOKIE['user_id'];


// Rediriger vers la page du profil


header("Location: profile.php");
exit;
?>