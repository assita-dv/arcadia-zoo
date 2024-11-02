
<?php
session_start(); // Vérifier que l'utilisateur est bien connecté (employé)

// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si un rapport spécifique a été passé via l'URL
if (isset($_GET['rapport_veterinaire_id'])) {
    $rapport_veterinaire_id = filter_var($_GET['rapport_veterinaire_id'], FILTER_SANITIZE_NUMBER_INT);

    // Requête pour récupérer les informations du rapport
    $sql = $conn->prepare("SELECT * FROM rapport_veterinaires WHERE rapport_veterinaire_id = ?");
    $sql->bind_param("i", $rapport_veterinaire_id);
    $sql->execute();
    $result = $sql->get_result();

    // Vérifier si des données existent pour ce rapport
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Rapport non trouvé.";
        exit;
    }

    $sql->close();
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['send'])) {
    // Récupérer les données du formulaire
    $new_rapport_veterinaire_id = filter_var($_POST['rapport_veterinaire_id'], FILTER_SANITIZE_NUMBER_INT);
    $date_rapport = filter_var($_POST['date_rapport'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $detail = filter_var($_POST['detail'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // Corrigé pour accepter du texte
    $username = filter_var($_POST['username'], FILTER_SANITIZE_EMAIL); // Corrigé si ce n'est pas un email
    $animal_id = filter_var($_POST['animal_id'], FILTER_SANITIZE_NUMBER_INT);

    // Requête pour mettre à jour les informations
    $update_sql = $conn->prepare("UPDATE rapport_veterinaires SET rapport_veterinaire_id = ?, date_rapport = ?, detail = ?, username = ?, animal_id = ? WHERE rapport_veterinaire_id = ?");
    $update_sql->bind_param("issisi", $new_rapport_veterinaire_id, $date_rapport, $detail, $username, $animal_id, $rapport_veterinaire_id);

    // Exécuter la requête et vérifier si la mise à jour a réussi
    if ($update_sql->execute()) {
        header("location:table-comptes-rendu.php?message=UpdateSuccess");
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
    <title>Modifier rapport vétérinaire</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <header>
    <?php include "../veterinaire/header_veterinaire.php"; ?>
    </header>

    <?php if (isset($row)) { ?>
    <form action="" method="post">
        <h1>Modifier rapport</h1>
        
        <input type="text" name="rapport_veterinaire_id" value="<?= htmlspecialchars($row['rapport_veterinaire_id']) ?>" placeholder="Rapport_id" required>
        <input type="date" name="date_rapport" value="<?= htmlspecialchars($row['date_rapport']) ?>" placeholder="Date Rapport" required>
        <input type="text" name="detail" value="<?= htmlspecialchars($row['detail']) ?>" placeholder="Détail" required>
        <input type="email" name="username" value="<?= htmlspecialchars($row['username']) ?>" placeholder="Nom d'utilisateur" required>
        <input type="text" name="animal_id" value="<?= htmlspecialchars($row['animal_id']) ?>" placeholder="ID de l'animal" required>
        <input type="submit" value="Modifier" name="send">
        <a class="link black" href="table-comptes-rendu.php">Annuler</a> 
    </form>
    <?php } else { ?>
        <p>Erreur : Aucun rapport à modifier.</p>
    <?php } ?>
</body>
</html>




