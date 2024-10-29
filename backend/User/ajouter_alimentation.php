
<?php
session_start(); // Vérifie que l'utilisateur est bien connecté

// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

/*Vérifier si l'utilisateur est bien connecté et que la session `employe_id` est définie
if (!isset($_SESSION['employe_id'])) {
    echo "Erreur : L'utilisateur doit être connecté pour ajouter une alimentation.";
    exit();
}*/

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer et sécuriser les données du formulaire
    $animal_id = filter_var($_POST['animal_id'], FILTER_SANITIZE_NUMBER_INT);
    $nourriture = filter_var($_POST['nourriture'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $quantite = filter_var($_POST['quantite'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_SPECIAL_CHARS);
    $heure = filter_var($_POST['heure'], FILTER_SANITIZE_SPECIAL_CHARS);
    $employe_id = filter_var($_POST['employe_id'],FILTER_SANITIZE_EMAIL ); // Utiliser l'ID de l'employé connecté

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO alimentation (animal_id, employe_id, nourriture, quantite, date, heure) 
            VALUES (?, ?, ?, ?, ?, ?)";

    // Utiliser une requête préparée pour éviter les injections SQL
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Erreur de préparation de la requête : " . $conn->error);
    }
    $stmt->bind_param("iissss", $animal_id, $employe_id, $nourriture, $quantite, $date, $heure);

    // Exécuter la requête et vérifier si elle a réussi
    if ($stmt->execute()) {
    header("location:aliment_table.php?message=Sucsse" );
    } else {
        echo "Erreur lors de l'ajout de l'alimentation : " . $conn->error;
    }

    // Fermer la requête et la connexion
    $stmt->close();
    $conn->close();
}
?>
