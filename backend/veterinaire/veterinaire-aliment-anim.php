









<?php
// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si un animal_id est spécifié dans le formulaire
if (isset($_GET['animal_id'])) {
    $animal_id = filter_var($_GET['animal_id'], FILTER_SANITIZE_NUMBER_INT);
    echo "ID de l'animal reçu : $animal_id<br>"; // Debugging

    // Préparer la requête pour récupérer l'historique d'alimentation
    $sql = $conn->prepare("SELECT date, heure, nourriture, quantite FROM alimentation WHERE animal_id = ? ORDER BY date DESC, heure DESC LIMIT 100");

    if (!$sql) {
        die("Erreur de préparation de la requête : " . $conn->error); // Vérifier la préparation
    }

    // Lier le paramètre et exécuter la requête
    $sql->bind_param("i", $animal_id);
    if ($sql->execute()) {
        echo "Requête exécutée avec succès<br>"; // Debugging
    } else {
        die("Erreur d'exécution de la requête : " . $sql->error); // Debugging
    }

    // Récupérer et afficher le résultat
    $result = $sql->get_result();
    if ($result->num_rows > 0) {
        echo "Résultats trouvés :<br>"; // Debugging
        while ($row = $result->fetch_assoc()) {
            echo "Date: " . htmlspecialchars($row['date']) . "<br>";
            echo "Heure: " . htmlspecialchars($row['heure']) . "<br>";
            echo "Nourriture: " . htmlspecialchars($row['nourriture']) . "<br>";
            echo "Quantité: " . htmlspecialchars($row['quantite']) . "<br><br>";
        }
    } else {
        echo "Aucun historique d'alimentation trouvé pour cet animal.";
    }

    // Fermer la requête
    $sql->close();
} else {
    echo "Aucun animal spécifié.";
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
    <link rel="stylesheet" href="/backend/css/veterinaire.css">
</head>
<body class="body-compterendus">
<?php include "../employee/header-dashboard.php"; ?>

<form action="" method="get">
    <label for="animal_id">Sélectionner un animal :</label>
    <select name="animal_id" id="animal_id" required>
        <?php
        // Récupération des animaux pour la liste déroulante
    
           require "../connect_ddb.php";
            $sql = "SELECT animal_id, prenom FROM animals";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['animal_id'] . "'>" . $row['prenom'] . "</option>";
            }
            ?>
       
    </select>
    <button type="submit">Afficher l'historique</button>
</form>
</body>
</html>
