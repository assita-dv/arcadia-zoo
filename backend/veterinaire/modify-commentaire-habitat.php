<?php
session_start(); // Vérifier que l'utilisateur est bien connecté (employé)

// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si un animal spécifique a été passé via l'URL
if (isset($_GET['commentaire_id'])) {
    $commentaire_id = filter_var($_GET['commentaire_id'], FILTER_SANITIZE_NUMBER_INT);

    // Requête pour récupérer les informations de l'animal
    $sql = $conn->prepare("SELECT * FROM habitats_commentaires WHERE commentaire_id = ?");
    $sql->bind_param("i", $commentaire_id);
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
    $new_commentaire_id = filter_var($_POST['commentaire_id'], FILTER_SANITIZE_NUMBER_INT);
    $habitat_id = filter_var($_POST['habitat_id'], FILTER_SANITIZE_NUMBER_INT);
    $veterinaire_id = filter_var($_POST['veterinaire_id'], FILTER_SANITIZE_NUMBER_INT);
    $date_habitat = filter_var($_POST['date_habitat'], FILTER_SANITIZE_NUMBER_INT);
    $commentaire = filter_var($_POST['commentaire'], FILTER_SANITIZE_SPECIAL_CHARS);

    // Requête pour mettre à jour les informations
    $update_sql = $conn->prepare("UPDATE habitats_commentaires SET commentaire_id = ?, habitat_id = ?, veterinaire_id = ?, date_habitat = ?, commentaire = ? WHERE commentaire_id = ?");
    $update_sql->bind_param("iiissi", $new_commentaire_id, $habitat_id, $veterinaire_id, $date_habitat, $commentaire, $new_commentaire_id);

    // Exécuter la requête et vérifier si la mise à jour a réussi
    if ($update_sql->execute()) {
        header("location:table-habitat-commentaire.php?message=UpdateSuccess");
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
    <title>Modifier rapport veterinaire</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <header>
    <?php include "../veterinaire/header_veterinaire.php"; ?>

    </header>
    <?php if (isset($row)) { ?>
    <form action="" method="post">
        <h1>Modifier rapport</h1>
        
        <input type="text" name="commentaire_id" value="<?= htmlspecialchars($row['commentaire_id']) ?>" placeholder="Commentaire_id" required>
        <input type="text" name="habitat_id"  value="<?= htmlspecialchars($row['habitat_id']) ?>" placeholder="habitat_id" required>
        <input type="text" name="veterinaire_id"  value="<?= htmlspecialchars($row['veterinaire_id']) ?>" placeholder="veterinaire_id" required>
        <input type="date" name="date_habitat" value="<?= htmlspecialchars($row['date_habitat']) ?>" placeholder="Date Habitat" required>
        <input type="text" name="commentaire" value="<?= htmlspecialchars($row['commentaire']) ?>" placeholder="commentaire" required>
        <input type="submit" value="Modifier" name="send">
        <a class="link black" href="table-habitat-commentaire.php">Annuler</a> 
    </form>
    <?php } else { ?>
        <p>Erreur : Aucun animal à modifier.</p>
    <?php } ?>
</body>
</html>
