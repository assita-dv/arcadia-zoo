<?php
// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si un utilisateur spécifique a été passé via l'URL
if (isset($_GET['username'])) {
    $username = filter_var($_GET['username'], FILTER_SANITIZE_EMAIL);

    // Requête pour récupérer les informations de l'utilisateur
    $sql = $conn->prepare("SELECT * FROM utilisateurs WHERE username = ?");
    $sql->bind_param("s", $username);
    $sql->execute();
    $result = $sql->get_result();

    // Vérifier si l'utilisateur existe
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Utilisateur non trouvé.";
        exit;
    }
    
    $sql->close();
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['send'])) {
    // Récupérer les données du formulaire
    $new_username = filter_var($_POST['username'], FILTER_SANITIZE_EMAIL);
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Requête pour mettre à jour l'utilisateur
    $update_sql = $conn->prepare("UPDATE utilisateurs SET username = ?, nom = ? WHERE username = ?");
    $update_sql->bind_param("sss", $new_username, $nom, $username);

    // Exécuter la requête et vérifier si la mise à jour a réussi
    if ($update_sql->execute()) {
        header("location:showUser.php?message=UpdateSuccess");
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
    <title>Modifier l'utilisateur</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <?php if (isset($row)) { ?>
    <form action="" method="post">
        <h1>Modifier les utilisateurs</h1>
        <input type="email" name="username" value="<?= htmlspecialchars($row['username']) ?>" placeholder="Username" required>
        <input type="text" name="nom" value="<?= htmlspecialchars($row['nom']) ?>" placeholder="Nom" required>
        <input type="submit" value="Modifier" name="send">
        <a class="link black" href="showUser.php">Annuler</a> 
    </form>
    <?php } else { ?>
        <p>Erreur : Aucun utilisateur à modifier.</p>
    <?php } ?>
</body>
</html>
