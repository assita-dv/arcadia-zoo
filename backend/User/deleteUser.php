<?php
    
    // Récupérer l'ID de imal à supprimer depuis l'URL
    $username = $_GET['username'];  // Correctement utiliser $animal_id au lieu de $role_id
    
    // Inclure la connexion à la base de données
    include_once "../connect_ddb.php";
    
    // Créer la requête SQL pour supprimer l'animal
    $sql = "DELETE FROM utilisateurs WHERE username = '$username'";
    
    // Exécuter la requête et rediriger en fonction du succès ou de l'échec
    if (mysqli_query($conn, $sql)) {
        // Redirection en cas de succès
        header("location:showUser.php?message=DeleteSuccess");
    } else {
        // Redirection en cas d'échec
        header("location:showUser.php?message=DeleteFail");
    }
    ?>