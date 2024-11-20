<?php

include_once "../connect_ddb.php";

// Récupérer l'ID de l'avis et l'action (valider ou invalider)
if (isset($_GET['id']) && isset($_GET['action'])) {
    $avis_id = intval($_GET['id']);
    $action = $_GET['action'];

    // Définir le nouveau statut en fonction de l'action
    $newStatus = ($action === 'valider') ? 1 : 0;

    // Mettre à jour le statut de l'avis dans la base de données
    $sql = "UPDATE avis SET isVisible = ? WHERE avis_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $newStatus, $avis_id);

    if ($stmt->execute()) {
        header("location: avis.php?message=success");
    } else {
        echo "Erreur lors de la mise à jour de l'avis : " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
<?php
if (isset($_GET['message']) && $_GET['message'] == 'success') {
    echo "<p>Avis mis à jour avec succès !</p>";
}
?>
