<?php
// Inclure la connexion à la base de données
include_once "connect_ddb.php";

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les valeurs du formulaire
    $email = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Requête SQL pour récupérer l'utilisateur par email
    $sql = "SELECT * FROM utilisateurs WHERE username = '$email'";
    $result = mysqli_query($conn, $sql);

    // Vérifier si l'utilisateur existe
    if (mysqli_num_rows($result) == 1) {
        // Récupérer les informations de l'utilisateur
        $row = mysqli_fetch_assoc($result);

// Comparer le mot de passe directement si c'est en clair (uniquement pour les tests)
if ($password == $row['password']) {
    // Connexion réussie
    session_start();
    $_SESSION['user_id'] = $row['utilisateur_id'];
    header("Location: dashboardAmin.php");
    exit();
    
} else {
    // Mot de passe incorrect
    echo "Mot de passe incorrect";
}

} 
}else {
  
        // L'utilisateur n'a pas été trouvé
        echo "Utilisateur non trouvé";
    }

?>

