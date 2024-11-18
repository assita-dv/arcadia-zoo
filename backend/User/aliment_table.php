<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/table.css">
    <!-- <link rel="stylesheet" href="../css/tableA.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.5/dist/bootstrap-table.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.5/dist/bootstrap-table.min.css">
</head>
<body class="body_alimentation" style="background-color: #265034;">
<?php
/*require header.php*/
require "../header.php";
?>

<!--- require page menu -->
<?php
require "../menu.php";
?>
<main class="main-aliment" style="padding-top: 170px; ">

    <div class="link_container">
        <a class="link-MG" href="alimentation.php">Ajouter une consommation</a>
    </div>
    <div class=".table-rapport2-container">
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
                <a href="aliment-delete.php?animal_id=<?=$row['animal_id']?>"><img src='../images/images/remove.png' style="width: 35px;" alt='Supprimer'></a>
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
     </div>
</main>
</body>
</html>

