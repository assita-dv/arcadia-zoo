<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horaires du Zoo Arcadia</title>
    <link rel="stylesheet" href="../css/table.css"> <!-- Ton fichier CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/tableA.css">

</head>
<body class="body-horaire">
<?php
/*require header.php*/
require "../header.php";
?>

<!--- require page menu -->
<?php
require "../menu.php";
?>
<main class="main3-container">
    <div class="link_container">
        <h1>Horaires du Zoo Arcadia</h1>
    </div>
        <div class="table-horaire">
            <table>
                <thead>
                    <tr>
                        <th>Jour de la semaine</th>
                        <th>Heure d'ouverture</th>
                        <th>Heure de fermeture</th>
                        <th>Modifier</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Inclure la connexion à la base de données
                    include_once "../connect_ddb.php";  // Chemin correct vers ton fichier de connexion

                    // Requête pour récupérer tous les horaires
                    $sql = "SELECT * FROM horaire";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($row['jour_semaine']) ?></td>
                                <td><?= htmlspecialchars($row['heure_ouverture']) ?></td>
                                <td><?= htmlspecialchars($row['heure_fermeture']) ?></td>
                                <td>
                                    <a href="modifier_horaire.php?jour_semaine=<?= $row['jour_semaine'] ?>"><img src='../images/images/write.png' style="width: 35px;" alt='Modifier'></a>
                                </td>
                                
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<p class='message'>Aucun horaire trouvé !</p>";
                    }

                    // Fermer la connexion
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
