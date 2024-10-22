<?php
// Vérification si le formulaire a été soumis
if (isset($_POST['send'])) {
    // Vérification si les champs 'username' et 'nom' sont définis et non vides
    if (!empty($_POST['username']) && !empty($_POST['nom'])) {

        // Connexion à la base de données
        include_once "../connect_ddb.php";

        // Sécuriser les données en échappant les caractères spéciaux
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $nom = mysqli_real_escape_string($conn, $_POST['nom']);

        // Requête SQL pour insérer les données
        $sql = "INSERT INTO utilisateurs (username, nom) VALUES ('$username', '$nom')";

        // Exécution de la requête et redirection en fonction du résultat
        if (mysqli_query($conn, $sql)) {
            header("location:showUser.php?message=AddSuccess");
        } else {
            header("location:addUser.php?message=AddFail");
        }
    } else {
        // Redirection si les champs sont vides
        header("location:addUser.php?message=EmptyFields");
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <form action="" method="post">
        <h1>Ajouter un utilisateur</h1>
        <input type="email" name="username" placeholder="Username" required>
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="submit" value="Ajouter" name="send">
        <a class="link black" href="showUser.php">Annuler</a>
    </form>
</body>
</html>
