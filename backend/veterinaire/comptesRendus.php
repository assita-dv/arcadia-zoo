
<!--- ------------------->









<?php
// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $animal_id = filter_var($_POST['animal_id'], FILTER_SANITIZE_NUMBER_INT);
    $date_rapport = filter_var($_POST['date_rapport'], FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $detail = filter_var($_POST['detail'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Préparer la requête d'insertion
    $sql = $conn->prepare("INSERT INTO rapport_veterinaires (animal_id, date_rapport, username, detail) VALUES (?, ?, ?, ?)");
    $sql->bind_param("isss", $animal_id, $date_rapport, $username, $detail);

    // Exécuter la requête et vérifier le succès
    if ($sql->execute()) {
        header("location:comptesRendus.php?message=Success");
       /* echo "Compte rendu ajouté avec succès.";*/
    } else {
        echo "Erreur lors de l'ajout du compte rendu : " . $conn->error;
    }

    $sql->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Compte Rendu</title>
    <!--<link rel="stylesheet" href="/backend/css/dashboard.css">-->
    <link rel="stylesheet" href="/backend/css/veterinaire.css">
</head>
<body class="body-compterendus">
<?php /**/include "../employee/header-dashboard.php"; ?>

<main class="main_container">
    <h2>Ajouter un Compte Rendu</h2>
    <form action="" method="post">
        <label for="animal_id">Sélectionner un animal :</label>
        <select name="animal_id" id="animal_id" required>
            <!-- Récupération des animaux depuis la base de données -->
            <?php
            include_once "../connect_ddb.php";
            $result = $conn->query("SELECT animal_id, prenom FROM animals");
            while ($animal = $result->fetch_assoc()) {
                echo "<option value='" . htmlspecialchars($animal['animal_id']) . "'>" . htmlspecialchars($animal['prenom']) . "</option>";
            }
            ?>
        </select><br><br>

        <label for="date_rapport">Date :</label>
        <input type="date" name="date_rapport" id="date_rapport" required><br><br>

        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="commentaire">Commentaire :</label>
        <textarea name="detail" id="commentaire" rows="5" required></textarea><br><br>
        <button type="submit">Ajouter le compte rendu</button>
    </form>
</main>
</body>
</html>
