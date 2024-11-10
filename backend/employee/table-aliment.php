<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/backend/css/dashboard.css">
    <!-- <link rel="stylesheet" href="../css/tableA.css">-->
</head>
<body class="body-alimentation-emp">

    <!-- header employée -->
<?php 
require "header-dashboard.php";
?> 
<main class="main-aliment" style="padding-top: 170px; ">
    <div class="link_container">
        <a class="link" href="add-aliment.php">Ajouter une consommation</a>
    </div>
   
    <div">
    <table  class="table-alimentation " style="margin-top: 30px;">
        <thead>
            <?php
            include_once "../connect_ddb.php";
            // Liste des utilisateurs
            $sql = "SELECT * FROM alimentation";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
            <tr>
                <th>Animal id</th>
                <th>employe id</th>
                <th>Nouriture</th>
                <th>Quantité</th>
                <th>Heure</th>
                <th>Date</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>

        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?> 
        <tr>
            <td><?=$row['animal_id']?></td>
            <td><?=$row['employe_id']?></td>
            <td><?=$row['nourriture']?></td>
            <td><?=$row['quantite']?></td>
            <td><?=$row['heure']?></td>
            <td><?=$row['date']?></td>
            
            <td>
                <a href="modifi-aliment.php?animal_id=<?=$row['animal_id']?>"><img src='../images/images/write.png' style="width: 35px;" alt='Modifier'></a>
            </td>
            <td>
                <a href="delete_aliment_emp.php?animal_id=<?=$row['animal_id']?>"><img src='../images/images/remove.png' style="width: 35px;" alt='Supprimer'></a>
            </td>
        </tr>
        <?php 
        }
        } else {
            echo "<p class='message'>0 utilisateur présent !</p>";
        }
        ?>
        </tbody>
    </table>
     </div>
</main>
</body>
</html>

