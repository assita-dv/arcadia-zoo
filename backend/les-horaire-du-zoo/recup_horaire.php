<?php
// Inclure la connexion à la base de données
/*include_once "../connect_ddb.php"; // Chemin à ajuster selon ta structure

// Vérifier si le formulaire a été soumis
if (isset($_POST['jour_semaine'])) {
    // Récupérer la valeur sélectionnée pour le jour de la semaine
    $jour = filter_var($_POST['jour_semaine'], FILTER_SANITIZE_SPECIAL_CHARS);

    // Préparer la requête pour récupérer les horaires en fonction du jour sélectionné
    $sql = $conn->prepare("SELECT * FROM horaire WHERE jour_semaine = ?");
    $sql->bind_param("s", $jour);  // "s" pour string (chaîne de caractères)
    $sql->execute();
    $result = $sql->get_result();

    // Vérifier si un résultat a été trouvé
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Horaires pour " . htmlspecialchars($row['jour_semaine']) . "</h2>";
        echo "<p>Heure d'ouverture : " . htmlspecialchars($row['heure_ouverture']) . "</p>";
        echo "<p>Heure de fermeture : " . htmlspecialchars($row['heure_fermeture']) . "</p>";
    } else {
        echo "<p>Aucun horaire trouvé pour ce jour.</p>";
    }

    // Fermer la connexion
    $sql->close();
    $conn->close();
} else {
    echo "<p>Veuillez sélectionner un jour.</p>";
}

*/
?>

<!-- les horaire du zoo -->

<!--
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horaires du Zoo Arcadia</title>
    <link rel="stylesheet" href="../css/style.css">  Inclure tes fichiers CSS si besoin 
</head>
<body>
    <h1>Consulter les horaires du Zoo Arcadia</h1>
    <form action="recup_horaire.php" method="POST">
        <label for="jour_semaine">Sélectionner un jour :</label>
        <select name="jour_semaine" id="jour_semaine" required>
            <option value="Lundi">Lundi</option>
            <option value="Mardi">Mardi</option>
            <option value="Mercredi">Mercredi</option>
            <option value="Jeudi">Jeudi</option>
            <option value="Vendredi">Vendredi</option>
            <option value="Samedi">Samedi</option>
            <option value="Dimanche">Dimanche</option>
        </select>
        <button type="submit">Voir les horaires</button>
    </form>
</body>
</html>
-->