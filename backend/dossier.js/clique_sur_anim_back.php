<?php

require '../../backend/admin/AnimalManager.php';

$animalId = $_GET['animalId'];
$manager = new AnimalManager();

if ($manager->incrementConsultation($animalId)) {
    echo "Consultation mise à jour avec succès.";
} else {
    echo "Impossible de mettre à jour la consultation.";
}
/* Vérifie que `animalIanimalIdest bien fourni dans l'URL */

if (!isset($_GET['animalId']) || empty($_GET['animalId'])) {
    die("ID d'animal non spécifié.");
}

$animalId = $_GET['animalId'];
header('Content-Type: application/json');

if ($manager->incrementConsultation($animalId)) {
    echo json_encode(['success' => true, 'message' => 'Consultation mise à jour avec succès.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Impossible de mettre à jour la consultation.']);
}
