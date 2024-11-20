<!-- section mongo_arcadia_db.php -->
<?php

require '../vendor/autoload.php'; // Charger l'autoloader de Composer
require_once __DIR__ . '/../backend/admin/AnimalManager.php'; // Charger la classe AnimalManager

//use App\AnimalManager;
use MongoDB\Client;

// Instancier AnimalManager
$manager = new AnimalManager();

// Tester la connexion MongoDB
$client = new Client("mongodb://localhost:27017");
$collection = $client->zoho_arcadia->animals;
$test = $collection->findOne();
echo "Connexion réussie : " . json_encode($test) . "<br>";

// Appeler incrementConsultation
$animalId = '673c599e14eb123fce08f542'; 
if ($manager->incrementConsultation($animalId)) {
    echo "Consultation mise à jour avec succès.<br>";
} else {
    echo "Impossible de mettre à jour la consultation.<br>";
}

// Récupérer et afficher tous les animaux avec consultations
$animals = $manager->getAllAnimalsWithConsultations();
foreach ($animals as $animal) {
    echo "Nom : " . $animal['name'] . " | Consultations : " . $animal['consultations'] . "<br>";
}

?>
