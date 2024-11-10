
<?php
// Démarre la session
session_start();

// Vérifiez si l'utilisateur veut se déconnecter
if (isset($_GET['logout']) && $_GET['logout'] == '1') {
    // Détruire la session
    session_unset();
    session_destroy();
    // Rediriger vers la page de connexion
    header("Location: ../arcadialogin.php?logout=1");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/backend/css/dashboard.css">
</head>
<body>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Arcadia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav"> 
        <a class="nav-link " href="accueil-employe.php">Home</a>
        <a class="nav-link" href="services-db-emp.php">Services</a>
        <a class="nav-link" href="table-aliment.php">alimentation animaux</a>
        <a class="nav-link " href="avis-emp.php">Avis de visiteurs</a>
      </div>
      <span class="icon-left">
      <a href="../../arcadialogin.php?logout=1"> <i class="fa-solid fa-right-from-bracket"></a></i>
       </span>
       
    </div>
  </div>
</nav>
</body>
</html>