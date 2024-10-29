

<?php
session_start(); // Vérifier que l'utilisateur est bien connecté (employé)

// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si un animal spécifique a été passé via l'URL
if (isset($_GET['animal_id'])) {
    $animal_id = filter_var($_GET['animal_id'], FILTER_SANITIZE_NUMBER_INT);

    // Requête pour récupérer les informations de l'animal
    $sql = $conn->prepare("SELECT * FROM alimentation WHERE animal_id = ?");
    $sql->bind_param("i", $animal_id);
    $sql->execute();
    $result = $sql->get_result();

    // Vérifier si des données existent pour cet animal
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Animal non trouvé.";
        exit;
    }

    $sql->close();
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['send'])) {
    // Récupérer les données du formulaire
    $new_animal_id = filter_var($_POST['animal_id'], FILTER_SANITIZE_NUMBER_INT);
    $nourriture = filter_var($_POST['nourriture'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $quantite = filter_var($_POST['quantite'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_SPECIAL_CHARS);
    $heure = filter_var($_POST['heure'], FILTER_SANITIZE_SPECIAL_CHARS);
    $employe_id = $_SESSION['employe_id']; // Utiliser l'ID de l'employé connecté

    // Requête pour mettre à jour les informations
    $update_sql = $conn->prepare("UPDATE alimentation SET animal_id = ?, employe_id = ?, nourriture = ?, quantite = ?, date = ?, heure = ? WHERE animal_id = ?");
    $update_sql->bind_param("iissssi", $new_animal_id, $employe_id, $nourriture, $quantite, $date, $heure, $animal_id);

    // Exécuter la requête et vérifier si la mise à jour a réussi
    if ($update_sql->execute()) {
        header("location:aliment_table.php?message=UpdateSuccess");
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
    <title>Modifier l'animal</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <?php if (isset($row)) { ?>
    <form action="" method="post">
        <h1>Modifier l'alimentation de l'animal</h1>
        <input type="text" name="animal_id" value="<?= htmlspecialchars($row['animal_id']) ?>" placeholder="ID de l'animal" required>
        <input type="text" name="nourriture" value="<?= htmlspecialchars($row['nourriture']) ?>" placeholder="Nourriture" required>
        <input type="number" name="quantite" step="0.01" value="<?= htmlspecialchars($row['quantite']) ?>" placeholder="Quantité" required>
        <input type="date" name="date" value="<?= htmlspecialchars($row['date']) ?>" placeholder="Date" required>
        <input type="time" name="heure" value="<?= htmlspecialchars($row['heure']) ?>" placeholder="Heure" required>
        <input type="submit" value="Modifier" name="send">
        <a class="link black" href="showUser.php">Annuler</a> 
    </form>
    <?php } else { ?>
        <p>Erreur : Aucun animal à modifier.</p>
    <?php } ?>
</body>
</html>
