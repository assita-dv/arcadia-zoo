

<?php
// Inclure la connexion à la base de données une seule fois
include_once "../connect_ddb.php";

// Vérifier si un service spécifique a été passé via l'URL
if (isset($_GET['service_id'])) {
    $service = filter_var($_GET['service_id'], FILTER_SANITIZE_SPECIAL_CHARS);

    // Requête pour récupérer les informations du service
    $sql = $conn->prepare("SELECT * FROM services WHERE service_id = ?");
    $sql->bind_param("i", $service);
    $sql->execute();
    $result = $sql->get_result();

    // Vérifier si le service existe
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Service non trouvé.";
        exit;
    }
    $sql->close(); // Ferme uniquement la requête préparée
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['send'])) {
    $new_service = filter_var($_POST['service_id'], FILTER_SANITIZE_SPECIAL_CHARS);
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description_servces'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Préparation de la requête de mise à jour
    $update_sql = $conn->prepare("UPDATE services SET service_id = ?, nom = ?, description_servces = ? WHERE service_id = ?");
    $update_sql->bind_param("issi", $new_service, $nom, $description, $service);

    if ($update_sql->execute()) {
        header("location:services-db-emp.php?message=UpdateSuccess");
    } else {
        echo "Erreur lors de la mise à jour : " . $conn->error;
    }
    $update_sql->close();
}

// Ne fermez la connexion qu'à la fin du script
$conn->close();
?>

<!-- Le reste de votre code HTML pour l'affichage de la page -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Services</title>
    <link rel="stylesheet" href="/backend/css/dashboard.css">
</head>
<body class="service_body_emp">
<?php 
require "header-dashboard.php";
?> 
<main class="main4_container">
    <div class="link_container" style="padding-top: 250px;">
        <a class="link" href="ajout-services.php">Ajouter un nouveau service</a>
    </div>
   <table style="margin-top: 65px;">
    <thead>
        <?php
        include "../connect_ddb.php";
        // Liste des utilisateurs
        $sql = "SELECT * FROM services";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
        <tr>
            <th>Service_id</th>
            <th>Nom</th>
            <th>Description_services</th> <!-- Correction ici -->
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
        <td><?= htmlspecialchars($row['description_servces']) ?></td> <!-- Correction ici -->
        <td>
            <a href="modifie-services.php?service_id=<?= htmlspecialchars($row['service_id']) ?>"><img src='../images/images/write.png' style="width: 35px;" alt='Modifier'></a>
        </td>
        <td>
            <a href="delete-service-em.php?service_id=<?= htmlspecialchars($row['service_id']) ?>"><img src='../images/images/remove.png' style="width: 35px;" alt='Supprimer'></a>
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
 
</main>
</body>
</html>
 