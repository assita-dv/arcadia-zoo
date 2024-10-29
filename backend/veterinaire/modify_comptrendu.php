<?php
session_start(); // Vérifier que l'utilisateur est bien connecté (employé)

// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si un animal spécifique a été passé via l'URL
if (isset($_GET['rapport_veterinaire_id'])) {
    $rapport_id = filter_var($_GET['rapport_veterinaire_id'], FILTER_SANITIZE_NUMBER_INT);

    // Requête pour récupérer les informations de l'animal
    $sql = $conn->prepare("SELECT * FROM rapport_veterinaires WHERE rapport_veterinaire_id = ?");
    $sql->bind_param("i", $rapport_id);
    $sql->execute();
    $result = $sql->get_result();

    // Vérifier si des données existent pour cet animal
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "rapport non trouvé.";
        exit;
    }

    $sql->close();
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['send'])) {
    // Récupérer les données du formulaire
    $new_rapport_veterinaire_id = filter_var($_POST['rapport_veterinaire_id'], FILTER_SANITIZE_NUMBER_INT);
    $date_rapport = filter_var($_POST['date_rapport'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $detail= filter_var($_POST['detail'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $username = filter_var($_POST['username'],  FILTER_SANITIZE_EMAIL);
    $animal_id = filter_var($_POST['animal_id'], FILTER_SANITIZE_NUMBER_INT);
  

    // Requête pour mettre à jour les informations
    $update_sql = $conn->prepare("UPDATE rapport_veterinaire SET rapport_veterinaire_id = ?, date_rapport = ?, detail = ?, username = ?, animal_id = ? WHERE rapport_veterinaire_id = ?");
    $update_sql->bind_param("issii", $new_rapport_veterinaire_id, $date_rapport, $detail, $username, $animal_id);

    // Exécuter la requête et vérifier si la mise à jour a réussi
    if ($update_sql->execute()) {
        header("location:comptesRendus.php?message=UpdateSuccess");
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
        
        <input type="text" name="rapport_veterinaire_id" value="<?= htmlspecialchars($row['rapport_veterinaire_id']) ?>" placeholder="Rapport_id" required>
        
        <input type="date" name="date_rapport" value="<?= htmlspecialchars($row['date_rapport']) ?>" placeholder="Date Rapport" required>
        <input type="text" name="detail" value="<?= htmlspecialchars($row['detail']) ?>" placeholder="Commentaire" required>
        <input type="email" name="username"  value="<?= htmlspecialchars($row['username']) ?>" placeholder="username" required>
        <input type="text" name="animal_id" value="<?= htmlspecialchars($row['animal_id']) ?>" placeholder="ID de l'animal" required>
        <input type="submit" value="Modifier" name="send">
        <a class="link black" href="showUser.php">Annuler</a> 
    </form>
    <?php } else { ?>
        <p>Erreur : Aucun animal à modifier.</p>
    <?php } ?>
</body>
</html>
