<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

 <?php 
  require "C:/Users/adouc/dashboardArcadia/header.php";
  require "C:/Users/adouc/dashboardArcadia/menu.php";
 ?>   

<main class="main4_container">
    <div class="link_container">
        <a class="link" href="ajoutservice.php">Ajouter un nouveaux service </a>
    </div>
    <div class="table-show">
   

<table>
    <thead>
        <?php
        include_once "../connect_ddb.php";
        // Liste des utilisateurs
        $sql = "SELECT * FROM services";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
        <tr>
            <th>Service_id</th>
            <th>Nom</th>
            <th>Description_services</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>

    <tbody>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?> 
    <tr>
        <td><?= htmlspecialchars($row['service_id']) ?></td>
        <td><?= htmlspecialchars($row['nom']) ?></td>
        <td><?= htmlspecialchars($row['description_servces']) ?></td>
        <td>
            <a href="modifiservice.php?service_id=<?= htmlspecialchars($row['service_id']) ?>"><img src='../images/images/write.png' style="width: 35px;" alt='Modifier'></a>
        </td>
        <td>
            <a href="deleteservice.php?service_id=<?= htmlspecialchars($row['service_id']) ?>"><img src='../images/images/remove.png' style="width: 35px;" alt='Supprimer'></a>
        </td>
    </tr>
    <?php 
    }
    } else {
        echo "<p class='message'>0 services présents !</p>";
    }
    ?>
    </tbody>
</table>
