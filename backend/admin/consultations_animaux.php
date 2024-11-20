
<?php
// Connexion à MySQL

require '../../backend/connect_ddb.php';
// Connexion à MySQL
$mysqli = new mysqli('localhost', 'root', '', 'arcadia');

// Vérification de la connexion
if ($mysqli->connect_error) {
    die("Connexion MySQL échouée : " . $mysqli->connect_error);
}

// Connexion à MongoDB

require '../../vendor/autoload.php';
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$mongoDB = $mongoClient->selectDatabase('zoo_arcadia');
$consultationsCollection = $mongoDB->selectCollection('consultations');

// Récupérer tous les animaux depuis MySQL
$result = $mysqli->query("SELECT animal_id, prenom FROM animals");
$animals = [];
while ($row = $result->fetch_assoc()) {
    $animals[$row['animal_id']] = ['prenom' => $row['prenom'], 'consultations' => 0];
}

// Récupérer les consultations depuis MongoDB
$consultations = $consultationsCollection->find();
foreach ($consultations as $consultation) {
    $animalId = $consultation['animal_id'];
    if (isset($animals[$animalId])) {
        $animals[$animalId]['consultations'] += 1;
    }
}

// Affichage en tableau HTML
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Animaux</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/table.css">
   
</head>
<body class="consultations">
<?php
/*require header.php*/
require "../header.php";
?>

<!--- require page menu -->
<?php
require "../menu.php";
?>
<div class="consultations_présentation_p">
    <p> Consultations des Animaux  </p></div>
    <table>
        
        <thead>
            <tr>
                <th>Nom de l'animal</th>
                <th>Nombre de consultations</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animals as $animal): ?>
                <tr>
                    <td><?= htmlspecialchars($animal['prenom']) ?></td>
                    <td><?= $animal['consultations'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

