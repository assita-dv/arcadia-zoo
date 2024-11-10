
<?php
// Démarre la session
session_start();

// Détruit toutes les variables de session
session_unset();

// Détruit la session
session_destroy();

// Redirige vers la page de connexion avec un message de déconnexion
header("Location: http://localhost/ARCADIA-ZOO/backend/loginbdd.php?message=deconnexionReussie");
exit;
?>

