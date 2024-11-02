
<?php
// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Initialiser une variable pour stocker les résultats HTML
$historique_alimentation = "";
$animal_options = "";

// Vérifier si un animal_id est spécifié dans le formulaire
if (isset($_GET['animal_id'])) {
    $animal_id = filter_var($_GET['animal_id'], FILTER_SANITIZE_NUMBER_INT);

    // Préparer la requête pour récupérer l'historique d'alimentation
    $sql = $conn->prepare("SELECT date, heure, nourriture, quantite FROM alimentation WHERE animal_id = ? ORDER BY date DESC, heure DESC LIMIT 100");
    if ($sql) {
        // Lier le paramètre et exécuter la requête
        $sql->bind_param("i", $animal_id);
        if ($sql->execute()) {
            $result = $sql->get_result();
            if ($result->num_rows > 0) {
                $historique_alimentation .= "<table><thead><tr><th>Date</th><th>Heure</th><th>Nourriture</th><th>Quantité</th></tr></thead><tbody>";
                while ($row = $result->fetch_assoc()) {
                    $historique_alimentation .= "<tr><td>" . htmlspecialchars($row['date']) . "</td><td>" . htmlspecialchars($row['heure']) . "</td><td>" . htmlspecialchars($row['nourriture']) . "</td><td>" . htmlspecialchars($row['quantite']) . "</td></tr>";
                }
                $historique_alimentation .= "</tbody></table>";
            } else {
                $historique_alimentation = "<p>Aucun historique d'alimentation trouvé pour cet animal.</p>";
            }
        } else {
            echo "<p>Erreur d'exécution de la requête : " . htmlspecialchars($sql->error) . "</p>";
        }
        $sql->close();
    } else {
        echo "<p>Erreur de préparation de la requête : " . htmlspecialchars($conn->error) . "</p>";
    }
}

// Récupération des animaux pour la liste déroulante
$sql_animals = "SELECT animal_id, prenom FROM animals";
$result_animals = $conn->query($sql_animals);
if ($result_animals && $result_animals->num_rows > 0) {
    while ($row = $result_animals->fetch_assoc()) {
        $animal_options .= "<option value='" . htmlspecialchars($row['animal_id']) . "'>" . htmlspecialchars($row['prenom']) . "</option>";
    }
} else {
    echo "<p>Aucun animal trouvé dans la base de données.</p>";
}

// Fermer la connexion
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique d'Alimentation</title>
    <link rel="stylesheet" href="../css/veterinaire.css">
</head>
<body class="body-veteri-aliment">

<!-- section navbar -->
<header>
    <?php include "../veterinaire/header_veterinaire.php"; ?>
</header>

<main class="main_container">
    <form action="" method="get">
        <label for="animal_id">Sélectionner un animal :</label>
        <select name="animal_id" id="animal_id" required>
            <?php echo $animal_options; ?>
        </select>
        <button type="submit">Afficher l'historique</button>
    </form>

    <!-- Affichage de l'historique d'alimentation -->
    <section class="historiqaliment">
        <p>Historique d'Alimentation</p>
        <?php echo $historique_alimentation; ?>
    </section>
</main>

</body>
</html>






