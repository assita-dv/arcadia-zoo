<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateur</title>
    <!--<link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/tableA.css">
    <!--<link rel="stylesheet" href="/css/table.css">-->
</head>
<body>

<!-- start section header-->
<?php require "../header.php" ; ?>

<!--end section header-->

<!-- start menu right-->
<?php require "../menu.php" ; ?>      
 <!-- end menu right-->
  <main class="main1-container">
            <div class="main1-title">
              <a href="../animaux.table/addAjout.php" ><button type="button" class="btn btn-light">Ajoutér un Animal</a>
            <a href=""></a>
            </div>
    <table class="table  table-responsive table-bordered border-dark table-hover text-center text-capitalize" style="margin-top: 45px;">
          <tr class="table-dark table-active text-uppercase ">
            <th data-sortable="true" >id</th>
            <th data-sortable="true">nom</th>
            <th data-sortable="true">race_id</th>
            <th data-sortable="true">Habitat_id</th>
            <th data-sortable="true">modifier</th>
            <th data-sortable="true">suprimer</th>
          </tr>
         <tr>
<?php
// Connexion à la base de données (vérifie si déjà incluse)
include_once "../connect_ddb.php";

// Exécute la requête pour obtenir les animaux
$sql = "SELECT * FROM animals";
$result = mysqli_query($conn, $sql);

// Vérifie si la requête retourne des résultats
if (mysqli_num_rows($result) > 0) {
    // Boucle sur chaque ligne (chaque animal)
    while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>";
           echo "<td >" . $row['animal_id'] ."</td>";
          echo "<td>" . $row['prenom'] . "</td>";
          echo "<td>" .$row['race_id'] . "</td>";
           echo "<td>" . $row['habitat_id'] . "</td>";
           // Bouton de modification
           echo "<td><a href='modifyAnimal.php?animal_id=" . $row['animal_id'] . "'><img src='../images/images/write.png' style='width:30px;' alt='Modifier'></a></td>";
            echo "<td><a href='deleteAnimal.php?id=" . $row['animal_id'] . "'><img src='../images/images/remove.png' style='width:30px;' alt='Supprimer'></a></td>";
             echo "<tr>";
       ?>
           
        <!--// Bouton de suppression-->
       
            <?php
    }} else {
        echo "Aucun animal trouvé.";
    }
    ?>  
      </tr>
    </table>
    </div>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.5/dist/bootstrap-table.min.js"></script>
</body>
</html>
