<?php
// Vérifier si un service_id a été passé dans l'URL
if (isset($_GET['animal_id'])) {
    // Récupérer et filtrer l'ID du service à supprimer
    $animal_id = filter_var($_GET['animal_id'], FILTER_SANITIZE_NUMBER_INT);
    
    
    include_once "../connect_ddb.php";
    
    // Créer une requête SQL préparée pour supprimer le service
    $sql = $conn->prepare("DELETE FROM alimentation WHERE animal_id = ?");
    
    // Lier le paramètre à la requête
    $sql->bind_param("i", $animal_id);
    
    // Exécuter la requête et rediriger en fonction du succès ou de l'échec
    if ($sql->execute()) {
        // Redirection en cas de succès
        header("location:table-aliment.php?message=DeleteSuccess");
    } else {
        // Redirection en cas d'échec
        header("location:table-aliment.php?message=DeleteFail");
    }
    
    // Fermer la requête préparée
    $sql->close();
    
    // Fermer la connexion
    $conn->close();
} else {
    // Redirection si aucun service_id n'a été fourni
    header("location:table-aliment.php?message=NoServiceID");
}
?>
