<?php

include_once "../connect_ddb.php";

// Vérifier si un jour de la semaine a été passé via l'URL
if (isset($_GET['jour_semaine'])) {
    $jour_semaine = filter_var($_GET['jour_semaine'], FILTER_SANITIZE_SPECIAL_CHARS);

    // Requête pour récupérer les informations actuelles de l'horaire
    $sql = $conn->prepare("SELECT * FROM horaire WHERE jour_semaine = ?");
    $sql->bind_param("s", $jour_semaine);
    $sql->execute();
    $result = $sql->get_result();

    // Vérifier si l'horaire existe
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Horaire non trouvé.";
        exit;
    }

    $sql->close();
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['update'])) {
    // Récupérer les nouvelles données du formulaire
    $nouvelle_heure_ouverture = filter_var($_POST['heure_ouverture'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nouvelle_heure_fermeture = filter_var($_POST['heure_fermeture'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Requête pour mettre à jour l'horaire
    $update_sql = $conn->prepare("UPDATE horaire SET heure_ouverture = ?, heure_fermeture = ? WHERE jour_semaine = ?");
    $update_sql->bind_param("sss", $nouvelle_heure_ouverture, $nouvelle_heure_fermeture, $jour_semaine);

    // Exécuter la requête et vérifier si la mise à jour a réussi
    if ($update_sql->execute()) {
        header("Location: zoo-horaire.php?message=UpdateSuccess");
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
    <title>Modifier Horaire</title>
    <link rel="stylesheet" href="../css/style.css"> 
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/tableA.css">
</head>
<body>
    <form action="" method="post">
        <h1>Modifier l'horaire pour <?= htmlspecialchars($row['jour_semaine']) ?></h1>
        <label for="heure_ouverture">Heure d'ouverture</label>
        <input type="time" name="heure_ouverture" id="heure_ouverture" value="<?= htmlspecialchars($row['heure_ouverture']) ?>" required>

        <label for="heure_fermeture">Heure de fermeture</label>
        <input type="time" name="heure_fermeture" id="heure_fermeture" value="<?= htmlspecialchars($row['heure_fermeture']) ?>" required>

        <input type="submit" name="update" value="Modifier l'horaire">
        <a class="link black" href="zoo-horaire.php">Annuler</a>
         <!-- Lien pour retourner au tableau des horaires -->
    </form>
</body>
</html>
