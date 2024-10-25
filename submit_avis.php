<?php
// Inclure la connexion à la base de données
include_once "backend/connect_ddb.php";

// Vérifier que les champs ont été remplis
if (isset($_POST['pseudo']) && isset($_POST['commentaire'])) {
    $pseudo = mysqli_real_escape_string($conn, $_POST['pseudo']);
    $commentaire = mysqli_real_escape_string($conn, $_POST['commentaire']);

    // Par défaut, l'avis sera invisible (non validé)
    $isVisible = 0;

    // Insérer l'avis dans la base de données
    $sql = "INSERT INTO avis (pseudo, commentaire, isVisible) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $pseudo, $commentaire, $isVisible);

    if ($stmt->execute()) {
        // Rediriger vers une page de confirmation
        header("location: ../backend/avis-avis/avis.php?message=success");


    } else {
        echo "Erreur lors de la soumission de l'avis : " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Veuillez remplir tous les champs.";
}

$conn->close();
?>
