<?php
require '../vendor/autoload.php'; // Charge le package MongoDB

use MongoDB\Client;

// Connexion à MongoDB
$client = new Client("mongodb://localhost:27017");
$collection = $client->zoho_arcadia->animals; // Base et collection

// Récupérer le nom de l'animal depuis la requête
$animalName = $_POST['name']; // Par exemple, "Médor"

// Incrémenter le compteur de consultations
$result = $collection->updateOne(
    ['name' => $animalName], 
    ['$inc' => ['consultations' => 1]],
    ['upsert' => true]
);

echo json_encode(["message" => "Consultation mise à jour", "result" => $result]);
