<!-- page ajouter une alimentation sur la pages employée
 
PAGE EMPLOYEE
-->

<?php
// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $animal_id = filter_var($_POST['animal_id'], FILTER_SANITIZE_NUMBER_INT);
    $employe_id = filter_var($_POST['employe_id'], FILTER_SANITIZE_EMAIL);
    $nourriture = filter_var($_POST['nourriture'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $quantite = filter_var($_POST['quantite'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $heure = filter_var($_POST['heure'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO alimentation (animal_id, employe_id, nourriture, quantite, date, heure) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Utiliser une requête préparée pour éviter les injections SQL
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erreur de préparation de la requête : " . $conn->error);
    }

    // Associer les paramètres et exécuter la requête
    $stmt->bind_param("isssss", $animal_id, $employe_id, $nourriture, $quantite, $date, $heure);

    // Exécuter la requête et vérifier si elle a réussi
    if ($stmt->execute()) {
        header("Location: table-aliment.php?message=Success");
    } else {
        echo "Erreur lors de l'ajout de l'alimentation : " . $stmt->error;
    }

    // Fermer la requête et la connexion
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/backend/css/dashboard.css">
    <!--<link rel="stylesheet" href="/style/main.css">
    <link rel="stylesheet" href="/style/main.scss">-->
    
</head>
<body>
<!-- start section header -->
<?php 
require "header-dashboard.php";
?>
<!-- start section header -->

<!-- start table alimentation -->
<h1 class="ajouter-c">Ajouter une consommation de nourriture pour un animal</h1>
    
    <form action="add-aliment.php" method="post" class="margin-block-end: 80px;">
        <label for="animal_id">Sélectionner un animal :</label>
        <select name="animal_id" required>
            <!-- Remplir dynamiquement la liste des animaux -->
            <?php
            include "../connect_ddb.php";
            $sql = "SELECT animal_id, prenom FROM animals";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['animal_id'] . "'>" . $row['prenom'] . "</option>";
            }
            ?>
        </select>
 
        <label for="employe_id">Username :</label>
        <input type="email" name="employe_id" required>

        <label for="nourriture">Nourriture :</label>
        <input type="text" name="nourriture" required>

        <label for="quantite">Quantité :</label>
        <input type="number" name="quantite" step="0.01" required>

        <label for="date">Date :</label>
        <input type="date" name="date" required>

        <label for="heure">Heure :</label>
        <input type="time" name="heure" required>

        <input type="submit" value="Ajouter">
        <a class="link black" href="table-aliment.php">Annuler</a>
    </form>

</body>
</html>