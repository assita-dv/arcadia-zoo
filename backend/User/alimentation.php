<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Alimentation</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <h1>Ajouter une consommation de nourriture pour un animal</h1>
    
    <form action="ajouter_alimentation.php" method="post">
        <label for="animal_id">Sélectionner un animal :</label>
        <select name="animal_id" required>
            <!-- Remplir dynamiquement la liste des animaux -->
            <?php
            include_once "../connect_ddb.php";
            $sql = "SELECT animal_id, prenom FROM animals";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['animal_id'] . "'>" . $row['prenom'] . "</option>";
            }
            ?>
        </select>

        <label for="nourriture">Nourriture :</label>
        <input type="text" name="nourriture" required>

        <label for="quantite">Quantité :</label>
        <input type="number" name="quantite" step="0.01" required>

        <label for="date">Date :</label>
        <input type="date" name="date" required>

        <label for="heure">Heure :</label>
        <input type="time" name="heure" required>

        <input type="submit" value="Ajouter">
        <a class="link black" href="/backend/dashboardAmin.php">Annuler</a>
    </form>
</body>
</html>
