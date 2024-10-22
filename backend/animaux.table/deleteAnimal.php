
<?php
// Récupérer l'ID de l'animal à supprimer depuis l'URL
$animal_id = $_GET['id'];  // Correctement utiliser $animal_id au lieu de $role_id

// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Créer la requête SQL pour supprimer l'animal
$sql = "DELETE FROM animals WHERE animal_id = '$animal_id'";

// Exécuter la requête et rediriger en fonction du succès ou de l'échec
if (mysqli_query($conn, $sql)) {
    // Redirection en cas de succès
    header("location:animaux.php?message=DeleteSuccess");
} else {
    // Redirection en cas d'échec
    header("location:animaux.php?message=DeleteFail");
}
?>
