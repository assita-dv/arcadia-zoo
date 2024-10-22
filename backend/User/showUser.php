<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateur</title>
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/tableA.css">
</head>
<body>
    
<?php
/*require header.php*/
require "../header.php";
?>

<!--- require page menu -->
<?php
require "../menu.php";
?>
<main class="main1-container">>
    <div class="link_container">
        <a class="link" href="addUser.php">Ajouter un utilisateur</a>
    </div>
    <div class="table-show">
    <table>
        <thead>
            <?php
            include_once "../connect_ddb.php";
            // Liste des utilisateurs
            $sql = "SELECT * FROM utilisateurs";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
            <tr>
                <th>Username</th>
                <th>Nom</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>

        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?> 
        <tr>
            <td><?=$row['username']?></td>
            <td><?=$row['nom']?></td>
            <td>
                <a href="modifyUser.php?username=<?=$row['username']?>"><img src='../images/images/write.png' alt='Modifier'></a>
            </td>
            <td>
                <a href="deleteUser.php?username=<?=$row['username']?>"><img src='../images/images/remove.png' alt='Supprimer'></a>
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

