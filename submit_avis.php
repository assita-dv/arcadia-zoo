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
<?php
// Exemple de traitement dans submit_avis.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['pseudo'];
    $commentaire = $_POST['commentaire'];

    // Code pour enregistrer l'avis dans la base de données
    // ...

    // Après l'enregistrement, redirige vers la page de l'avis avec un message de succès
    header("Location: avis-visiteur.php?message=success");
    exit(); // S'assure que le script s'arrête ici
} else {
    // Si la méthode n'est pas POST, renvoie vers la page d'accueil ou affiche un message d'erreur
    header("Location: index.php");
    exit();
}
