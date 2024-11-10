


<?php
// Démarre la session
session_start();

// Vérifiez si l'utilisateur veut se déconnecter
if (isset($_GET['logout']) && $_GET['logout'] == '1') {
    // Détruire la session
    session_unset();
    session_destroy();
    // Rediriger vers la page de connexion
    header("Location: ../arcadialogin.php?logout=1");

    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Vétérinaire</title>
    <link rel="stylesheet" href="path_to_your_css_file.css">
</head>
<body>
<div class="grid-container">
<header class="header">
    <div class="menu-icon">
        <span><i class="fa-solid fa-bars"></i></span>
    </div>
    
    <!-- barre de recherche -->
    <div class="header-left">
        <span class="material">
            <i class="fa-solid fa-loupe"></i>
        </span>
    </div>
    <!-- fin barre de recherche -->
    
    <div class="header-right">
        <span class="material">
            <i class="fa-solid fa-bell"></i>
        </span>
        <span class="material">
            <i class="fa-solid fa-envelope"></i>
        </span>
        <span class="material-deconnexion">
            <!-- Bouton de déconnexion avec le paramètre logout=1 -->
            <a href="?logout=1"><i class="fa-solid fa-right-from-bracket"></a></i>
        </span>
    </div>
</header>

<!-- Contenu de la page vétérinaire ici -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
