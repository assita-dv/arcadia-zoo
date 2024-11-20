<?php
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