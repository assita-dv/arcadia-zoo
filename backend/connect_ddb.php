<?php
/*$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'root'; $password = '';

// create connexion
try { $dbh = new PDO($dsn, $username, $password);
    echo "Connexion réussie !"; 
}
     catch (PDOException $e)
{ echo 'Échec de la connexion : ' . $e->getMessage();

}
*/
$host = "localhost";
$username = "root";
$password = "";
$dbname = "arcadia";
// create connection

$conn = mysqli_connect($host, $username, $password, $dbname);

// check connection
if (!$conn){
    die("connection failed:" . mysqli_connect_error());
}
?>