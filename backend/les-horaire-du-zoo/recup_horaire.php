<?php
// Inclure la connexion à la base de données
include_once "../connect_ddb.php"; // Chemin à ajuster selon ta structure

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
?>
