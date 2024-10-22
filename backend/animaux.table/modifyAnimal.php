
<?php
// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si un animal spécifique a été passé via l'URL
if (isset($_GET['animal_id'])) {
    $animal_id = filter_var($_GET['animal_id'], FILTER_SANITIZE_NUMBER_INT); // Utilise $animal_id ici

    // Requête pour récupérer les informations de l'animal
    $sql = $conn->prepare("SELECT * FROM animals WHERE animal_id = ?");
    $sql->bind_param("i", $animal_id); // Utilise $animal_id ici
    $sql->execute();
    $result = $sql->get_result();

    // Vérifier si l'animal existe
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
    $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $race_id = filter_var($_POST['race_id'], FILTER_SANITIZE_NUMBER_INT);
    $habitat_id = filter_var($_POST['habitat_id'], FILTER_SANITIZE_NUMBER_INT);

    // Requête pour mettre à jour l'animal
    $update_sql = $conn->prepare("UPDATE animals SET animal_id = ?, prenom = ?, race_id = ?, habitat_id = ? WHERE animal_id = ?");
    $update_sql->bind_param("issii", $new_animal_id, $prenom, $race_id, $habitat_id, $animal_id); // Utilise $animal_id pour l'ID actuel

    // Exécuter la requête et vérifier si la mise à jour a réussi
    if ($update_sql->execute()) {
        header("location:animaux.php?message=UpdateSuccess");
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
    <link rel="stylesheet" href="../css/tableA.css">
</head>
<body>
    <?php if (isset($row)) { ?>
    <form action="" method="post">
        <h1>Modifier les animaux</h1>
        <input type="text" name="animal_id" value="<?= htmlspecialchars($row['animal_id']) ?>" placeholder="animal_id" required>
        <input type="text" name="prenom" value="<?= htmlspecialchars($row['prenom']) ?>" placeholder="Prenom" required>
        <input type="text" name="race_id" value="<?= htmlspecialchars($row['race_id']) ?>" placeholder="race_id" required>
        <input type="text" name="habitat_id" value="<?= htmlspecialchars($row['habitat_id']) ?>" placeholder="habitat_id" required>
        
        <input type="submit" value="Modifier" name="send">
        <a class="link black" href="../animaux.table/animaux.php">Annuler</a> 
    </form>
    <?php } else { ?>
        <p>Erreur : Aucun animal à modifier.</p>
    <?php } ?>
</body>
</html>
