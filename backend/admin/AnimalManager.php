<?php

require __DIR__ . '../../../vendor/autoload.php';
use MongoDB\Client; // Charge la classe Client de MongoDB

class AnimalManager {
    private $mongoClient;

    public function __construct() {
        $this->mongoClient = new Client("mongodb://localhost:27017");
    }

    // Méthode pour incrémenter les consultations d'un animal

    public function incrementConsultation($animalId) {
        $collection = $this->mongoClient->zoho_arcadia->animals;
    

        $result = $collection->updateOne(
            ['_id' => $animalId], 
            ['$inc' => ['consultations' => 1]]
        );
    
        return $result->getModifiedCount() > 0;
    }
    
    // Méthode pour récupérer tous les animaux avec leurs consultations
    public function getAllAnimalsWithConsultations() {
        $collection = $this->mongoClient->zoho_arcadia->animals;
        return $collection->find()->toArray();
    }
}
