


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horaires du Zoo Arcadia</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Inclure tes fichiers CSS si besoin -->
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
