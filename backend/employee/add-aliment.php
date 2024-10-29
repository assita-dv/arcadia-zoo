<!-- page ajouter une alimentation sur la pages employée
 
PAGE EMPLOYEE
-->

<?php
session_start(); // Vérifie que l'utilisateur est bien connecté (employé)

// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $animal_id = $_POST['animal_id'];
    $nourriture = $_POST['nourriture'];
    $quantite = $_POST['quantite'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $username= $_SESSION['username']; // Récupérer l'ID de l'employé connecté

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO alimentation (animal_id, username, nourriture, quantite, date, heure) 
            VALUES (?, ?, ?, ?, ?, ?)";
    
    // Utiliser une requête préparée pour éviter les injections SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssss", $animal_id, $username, $nourriture, $quantite, $date, $heure);

    // Exécuter la requête et vérifier si elle a réussi
    if ($stmt->execute()) {
        header("location:alimentation-emp.php?message=Success");
    } else {
        echo "Erreur lors de l'ajout de l'alimentation : " . $conn->error;
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
}
?>
