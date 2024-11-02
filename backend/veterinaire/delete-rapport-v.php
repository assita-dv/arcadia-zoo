<?php
// Vérifier si un service_id a été passé dans l'URL
if (isset($_GET['rapport_veterinaire_id'])) {
    // Récupérer et filtrer l'ID du service à supprimer
    $rapport_veterinaire_id = filter_var($_GET['rapport_veterinaire_id'], FILTER_SANITIZE_NUMBER_INT);
    
    // Inclure la connexion à la base de données
    include_once __DIR__ . "/../connect_ddb.php";

    // Créer une requête SQL préparée pour supprimer le service
    $sql = $conn->prepare("DELETE FROM rapport_veterinaires WHERE rapport_veterinaire_id = ?");
    
    // Lier le paramètre à la requête
    $sql->bind_param("i", $rapport_veterinaire_id);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "avis_id reçu: " . $rapport_veterinaire_id;

    // Exécuter la requête et rediriger en fonction du succès ou de l'échec
    if ($sql->execute()) {
        echo "DeleteSuccess";
        // Redirection en cas de succès
        header("location:table-comptes-rendu.php?message=DeleteSuccess");

    } else {
        echo "DeleteFail: " . $conn->error;
        // Redirection en cas d'échec
        header("location:table-comptes-rendu.php?message=DeleteFail");
    }
    
    // Fermer la requête préparée
    $sql->close();
    
    // Fermer la connexion
    $conn->close();
} else {
    // Redirection si aucun service_id n'a été fourni
    header("location:table-comptes-rendu.php?message=NoAvisID");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <header>
   <?php include "../veterinaire/header_veterinaire.php"; ?>

   </header> 
</body>
</html>
