<?php
// Inclure la connexion à la base de données
include_once "../connect_ddb.php";

// Récupérer tous les avis
$sql = "SELECT * FROM avis";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Avis</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <h1 class="avis-h1">Gestion des Avis</h1>
    <table>
        <thead>
            <tr>
                <th>Pseudo</th>
                <th>Commentaire</th>
                <th>Statut</th>
                <th>Action</th>
                <th>suprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $isVisible = $row['isVisible'] ? 'Validé' : 'Invalidé';
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($row['pseudo']) ?></td>
                        <td><?= htmlspecialchars($row['commentaire']) ?></td>
                        <td><?= $isVisible ?></td>
                
                        <td>
                            <!-- Boutons pour valider/invalider -->
                            <?php if ($row['isVisible']) { ?>
                                <a href="avis-action.php?id=<?= $row['avis_id'] ?>&action=invalider">Invalider</a>
                            <?php } else { ?>
                                <a href="avis-action.php?id=<?= $row['avis_id'] ?>&action=valider">Valider</a>
                            <?php } ?>
                        </td>
                        <td>
                <a href="avis.php?username=<?=$row['avis_id']?>"><img src='../images/images/remove.png' alt='Supprimer'></a>
            </td>
                    </tr>
                <?php
                }
            } else {
                echo "<tr><td colspan='4'>Aucun avis trouvé</td></tr>";
            }
            ?>
        </tbody>
        <a class="link black" href="/backend/dashboardAmin.php">Annuler</a> 
    </table>
</body>
</html>
