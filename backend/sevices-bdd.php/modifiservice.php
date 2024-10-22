<?php
// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si un service spécifique a été passé via l'URL
if (isset($_GET['service_id'])) {
    $service = filter_var($_GET['service_id'], FILTER_SANITIZE_SPECIAL_CHARS);

    // Requête pour récupérer les informations du service
    $sql = $conn->prepare("SELECT * FROM services WHERE service_id = ?");
    $sql->bind_param("i", $service);  // Utiliser 'i' si service_id est un entier
    $sql->execute();
    $result = $sql->get_result();

    // Vérifier si le service existe
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Service non trouvé.";
        exit;
    }
    
    $sql->close();
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['send'])) {
    // Récupérer les données du formulaire
    $new_service = filter_var($_POST['service_id'], FILTER_SANITIZE_SPECIAL_CHARS);
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description_servces'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // Requête pour mettre à jour le service
    $update_sql = $conn->prepare("UPDATE services SET service_id = ?, nom = ?, description_servces = ? WHERE service_id = ?");
    $update_sql->bind_param("issi", $new_service, $nom, $description, $service);  // 'i' pour un entier, 's' pour string

    // Exécuter la requête et vérifier si la mise à jour a réussi
    if ($update_sql->execute()) {
        header("location:servicebdd.php?message=UpdateSuccess");
    } else {
        echo "Erreur lors de la mise à jour : " . $conn->error;
    }

    $update_sql->close();
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les services</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <?php if (isset($row)) {
    
      ?>
    <form action="" method="post">
        <h1>Modifier les services</h1>
        <input type="text" name="service_id" value="<?= htmlspecialchars($row['service_id']) ?>" placeholder="Service_id" required>
        <input type="text" name="nom" value="<?= htmlspecialchars($row['nom']) ?>" placeholder="Nom" required>
        <input type="text" name="description_servces" value="<?= htmlspecialchars($row['description_servces']) ?>" placeholder="Description" required>
        <input type="submit" value="Modifier" name="send">
        <a class="link black" href="servicebdd.php">Annuler</a> 
    </form>
    <?php } else { ?>
        <p>Erreur : Aucun service à modifier.</p>
    <?php } ?>
</body>
</html>
