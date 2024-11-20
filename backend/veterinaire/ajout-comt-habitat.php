<?php
session_start(); // Vérifier que l'utilisateur est bien connecté (employé)


include_once "../connect_ddb.php";

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    // Récupérer les données du formulaire
    $habitat_id = filter_var($_POST['habitat_id'], FILTER_SANITIZE_NUMBER_INT);
    $veterinaire_id = filter_var($_POST['veterinaire_id'], FILTER_SANITIZE_EMAIL);
    $date_habitat = filter_var($_POST['date_habitat'], FILTER_SANITIZE_SPECIAL_CHARS);
    $commentaire = filter_var($_POST['commentaire'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Préparer la requête d'insertion
    $sql = $conn->prepare("INSERT INTO habitats_commentaires (habitat_id, veterinaire_id, date_habitat, commentaire) VALUES (?, ?, ?, ?)");
    $sql->bind_param("isss", $habitat_id, $veterinaire_id, $date_habitat, $commentaire);

    // Exécuter la requête et vérifier le succès
    if ($sql->execute()) {
        header("location:table-habitat-commentaire.php?message=Success");
    } else {
        echo "Erreur lors de l'ajout du commentaire : " . $conn->error;
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
    <title>Ajouter un Commentaire sur un Habitat</title>
   <link rel="stylesheet" href="../css/veterinaire.css">
</head>
<body class="body_comt_habitat">
<!-- navbar section -->
 <header>
<?php include "../veterinaire/header_veterinaire.php"; ?>
</header>
<main class="main_container">
    <div class="ajoutcommentaire-p">
    <p>Ajouter un Commentaire sur un Habitat</p></div>
    <form action="" method="post">
        <label for="habitat_id">Sélectionner un habitat :</label>
        <select name="habitat_id" id="habitat_id" required>
            <!-- Récupération des habitats depuis la base de données -->
            <?php
            include_once "../connect_ddb.php";
            $result = $conn->query("SELECT habitat_id, nom FROM habitats");
            while ($habitat = $result->fetch_assoc()) {
                echo "<option value='" . htmlspecialchars($habitat['habitat_id']) . "'>" . htmlspecialchars($habitat['nom']) . "</option>";
            }
            ?>
        </select><br><br>

        <label for="veterinaire_id">ID Vétérinaire :</label>
        <input type="email" name="veterinaire_id" id="veterinaire_id" required><br><br>
        
        <label for="date_habitat">DATE :</label>
        <input type="date" name="date_habitat" id="date_habitat" required><br><br>


        <label for="commentaire">Commentaire :</label>
        <textarea name="commentaire" id="commentaire" rows="5" required></textarea><br><br>

        <button type="submit">Ajouter le commentaire</button>
    </form>
</main>
</body>
</html>
