<?php
/*
$dsn ='mysql:host=localhost;dbname=arcadia';
$user = 'zoo_php';
$password = '25s09i2r0a0n0i';
try{
   $pdo= new PDO($dsn, $user, $password);
   $maConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
//Récupérer les utilisateurs 

    $query = "SELECT * FROM utilisateur";
    $stmt = $pdo->query($query);
    $utilisateur = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Afficher les utilisateurs

    foreach($utilisateur as $user){
        echo "ID : " . $user['username'] . "<br>";
        echo "Nom : " . $user['nom'] . "<br>";
        echo "Prenom : " . $user['prenom'] . "<br>";
        echo "password : " . $user['password'] . "<br>";

        echo "<br>";
    }

echo "connexion Reusi"; 
}catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
    
}*/

?>