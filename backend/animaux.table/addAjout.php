

<?php
// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Vérification si le formulaire a été soumis
if (isset($_POST['send'])) {
    // Vérification si les champs sont définis et non vides
    if (!empty($_POST['animal_id']) && !empty($_POST['prenom']) && !empty($_POST['race_id']) && !empty($_POST['habitat_id'])) {
        
        // Sécuriser les données
        $animal_id = mysqli_real_escape_string($conn, $_POST['animal_id']);
        $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
        $race_id = mysqli_real_escape_string($conn, $_POST['race_id']);
        $habitat_id = mysqli_real_escape_string($conn, $_POST['habitat_id']);
        
        // Requête SQL pour insérer les données
        $sql = "INSERT INTO animals (animal_id, prenom, race_id, habitat_id) VALUES ('$animal_id', '$prenom', '$race_id', '$habitat_id')";
        
        // Exécution de la requête
        if (mysqli_query($conn, $sql)) {
            header("location:animaux.php?message=AddSuccess");
        } else {
            header("location:addAjout.php?message=AddFail");
        }
    } else {
        // Redirection si les champs sont vides
        header("location:addAjout.php?message");
    }
  }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/tableA.css">
    <link rel="stylesheet" href="/css/table.css">
</head>
<body>
 
<main class="main2-container">
            <form action="../animaux.table/uploadAnimal.php" method="POST" enctype="multipart/form-data">
    <label for="prenom">Prénom de l'animal :</label>
    <input type="text" name="prenom" required>
    
    <label for="race_id">Race :</label>
    <input type="text" name="race_id" required>

    <label for="habitat_id">Habitat :</label>
    <input type="text" name="habitat_id" required>

    <label for="image">Choisir une image :</label>
    <input type="file" name="image" accept="image/*" required>

    <input type="submit" name="submit" value="Ajouter l'animal">
    <a class="link black" href="animaux.php">Annuler</a> 
</form>

<!-- -->
            
</div>
  </section>
</main>
</div>
</body>
</html>