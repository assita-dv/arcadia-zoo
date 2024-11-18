<?php
// Vérifier si un avis_id a été passé dans l'URL
if (isset($_GET['avis_id'])) {
    // Récupérer et filtrer l'ID de l'avis à supprimer
    $avis_id = filter_var($_GET['avis_id'], FILTER_SANITIZE_NUMBER_INT);
    
    // Inclure la connexion à la base de données
    include_once __DIR__ . "/../connect_ddb.php";

    // Vérifier la connexion à la base de données
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Créer une requête SQL préparée pour supprimer l'avis
    $sql = $conn->prepare("DELETE FROM avis WHERE avis_id = ?");
    
    // Lier le paramètre à la requête
    $sql->bind_param("i", $avis_id);

    // Exécuter la requête et rediriger en fonction du succès ou de l'échec
    if ($sql->execute()) {
        // Redirection en cas de succès
        header("Location: avis-emp.php?message=DeleteSuccess");
        exit;
    } else {
        // Redirection en cas d'échec
        header("Location: avis-emp.php?message=DeleteFail");
        exit;
    }
    
    // Fermer la requête préparée et la connexion
    $sql->close();
    $conn->close();
} else {
    // Redirection si aucun avis_id n'a été fourni
    header("Location: avis-emp.php?message=NoAvisID");
    exit;
}
