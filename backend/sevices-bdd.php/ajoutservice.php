<?php
// Vérification si le formulaire a été soumis
if (isset($_POST['send'])) {
    // Vérification si les champs 'username' et 'nom' sont définis et non vides
    if (!empty($_POST['service_id']) && !empty($_POST['nom']) && !empty($_POST['description_servces'])) {

        // Connexion à la base de données
        include_once "../connect_ddb.php";

        // Sécuriser les données en échappant les caractères spéciaux
        $service_id= mysqli_real_escape_string($conn, $_POST['service_id']);
        $nom = mysqli_real_escape_string($conn, $_POST['nom']);
        $description_servces = mysqli_real_escape_string($conn, $_POST['description_servces']);
        // Requête SQL pour insérer les données
        $sql = "INSERT INTO services (service_id, nom, description_servces) VALUES ('$service_id', '$nom', '$description_servces')";

        // Exécution de la requête et redirection en fonction du résultat
        if (mysqli_query($conn, $sql)) {
            header("location:servicebdd.php?message=AddSuccess");
        } else {
            header("location:ajoutservice.php?message=AddFail");
        }
    } else {
        // Redirection si les champs sont vides
        header("location:ajoutservice.php?message=EmptyFields");
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
        <input type="text" name="service_id" placeholder="Service_id" required>
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="description_servces" placeholder="description_servces" required>
        <input type="submit" value="Ajouter" name="send">
        <a class="link black" href="servicebdd.php">Annuler</a>
    </form>
</body>
</html>
