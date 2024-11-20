
<?php

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

        if ($password == $row['password']) {
            // Connexion réussie

            // Initialiser la session
            session_start();
            $_SESSION['user_id'] = $row['utilisateur_id'];

            // Récupérer le rôle de l'utilisateur
            $role = $row['role'];

            // Redirection en fonction du rôle
            if ($role == 'admin') {
                
                header("Location: ../backend/dashboardAmin.php");


            } elseif ($role == 'employée') {
                header("Location: /backend/employee/services-db-emp.php");


            } elseif ($role == 'vétérinaire') {
                header("Location: /backend/veterinaire/accueil-veterinaire.php");
            }
            exit();
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect";
        }
    } else {
        // L'utilisateur n'a pas été trouvé
        echo "Utilisateur non trouvé";
    }
}
?>
<?php
// Affiche un message si la déconnexion a été réussie
if (isset($_GET['message']) && $_GET['message'] === 'deconnexionReussie') {
    echo "<p>Vous vous êtes déconnecté avec succès.</p>";
}
?>
