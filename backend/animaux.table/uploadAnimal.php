
<?php
// Vérification si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Vérification si les champs 'prenom', 'race_id', 'habitat_id' sont définis et non vides
    if (!empty($_POST['prenom']) && !empty($_POST['race_id']) && !empty($_POST['habitat_id']) && isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

        // Connexion à la base de données
        include_once "../connect_ddb.php";

        // Sécuriser les données en échappant les caractères spéciaux
        $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
        $race_id = mysqli_real_escape_string($conn, $_POST['race_id']);
        $habitat_id = mysqli_real_escape_string($conn, $_POST['habitat_id']);

        // Gestion du fichier image
        $image = $_FILES['image']['tmp_name'];
        $image_name = basename($_FILES['image']['name']);
        $image_destination = "../uploads/" . $image_name; // Dossier de destination

        // Vérifiez si le fichier n'est pas vide et est bien une image
        if (!empty($image) && getimagesize($image) !== false) {
            // Déplacer l'image vers le dossier
            if (move_uploaded_file($image, $image_destination)) {
                // Préparer la requête SQL avec une image
                $sql = $conn->prepare("INSERT INTO animals (prenom, race_id, habitat_id, image) VALUES (?, ?, ?, ?)");
                $sql->bind_param("siss", $prenom, $race_id, $habitat_id, $image_name);

                // Exécuter la requête et redirection en fonction du résultat
                if ($sql->execute()) {
                    header("location:animaux.php?message=AddSuccess");
                } else {
                    header("location:addAjout.php?message=AddFail");
                }

                $sql->close();
            } else {
                echo "Erreur lors du téléchargement de l'image.";
            }
        } else {
            echo "Le fichier téléchargé n'est pas une image valide ou est vide.";
        }
    } else {
        // Redirection si les champs sont vides ou si une erreur de fichier est survenue
        header("location:addAjout.php?message=EmptyFieldsOrFileError");
    }
}
?>
