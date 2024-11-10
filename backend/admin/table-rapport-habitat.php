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
<body class="body_alimentation">
<?php
/*require header.php*/
require "../header.php";
?>

<!--- require page menu -->
<?php
require "../menu.php";
?>


<main class="main-aliment" style="padding-top: 170px; ">
   
    <div">
    <table  class="table-alimentation " style="margin-top: 30px;">
        <thead>
            <?php
            include_once "../connect_ddb.php";
            // Liste des utilisateurs
            $sql = "SELECT * FROM habitats_commentaires";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
            <tr>
                <th>Commentaire Id</th>
                <th>habitat_id</th>
                <th>Vétérinaire Id</th>
                 <th>Date_habitat</th>
                 <th>Commentaire</th>
                <!-- <th>Modifier</th>
                 <th>Supprimer</th>-->
            </tr>
        </thead>

        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?> 
        <tr>
             <td><?=$row['commentaire_id']?></td>
             <td><?=$row['habitat_id']?></td>
             <td><?=$row['veterinaire_id']?></td>
             <td><?=$row['date_habitat']?></td>
             <td><?=$row['commentaire']?></td>
           
            
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

