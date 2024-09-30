<?php 

/*$dsn = 'mysql:host=localhost;dbname=arcadia';
 $username = 'root'; $password = '';
  try { $dbh = new PDO($dsn, $username, $password);
     echo "Connexion réussie !"; } catch (PDOException $e)
 { echo 'Échec de la connexion : ' . $e->getMessage(); }
$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'adminjose';
$password = 'bovsaz25pyHry09Sirani';

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer les utilisateurs 
    $query = "SELECT * FROM utilisateurs";
    $stmt = $pdo->query($query);
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Afficher les utilisateurs
    foreach($utilisateurs as $utilisateur){
        echo "ID : " . $utilisateur['idUtilisateur'] . "<br>";
        echo "nom : " . $utilisateur['nom'] . "<br>";
        echo "Prenom : " . $utilisateur['prenom'] . "<br>";
        echo "pasword: " . $utilisateur['pasword'] . "<br>";
        echo "<br>";
    }
}
catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
}
*/
?>