<?php
header('Content-Type: application/json');

if ($manager->incrementConsultation($animalId)) {
    echo json_encode(['success' => true, 'message' => 'Consultation mise à jour avec succès.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Impossible de mettre à jour la consultation.']);
}

?>

 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Consulter un Animal</title>
    <script>
        function incrementConsultation(animalId) {
            
            fetch(`index.php?animalId=${animalId}`)
                .then(response => response.text())
                .then(data => {
                    alert(data);  
                })
                .catch(error => console.error('Erreur:', error));
        }
    </script>
</head>
<body>
    <div>
        <h1>Animaux</h1>
        <ul>
            <li><a href="#" onclick="incrementConsultation('123456')">Médor</a></li>
            <li><a href="#" onclick="incrementConsultation('7891011')">Rex</a></li>
        </ul>
    </div>
</body>
</html>

<script>
    function incrementConsultation(animalId) {
        fetch(`../../backend/clique_sur_anim_back.php?animalId=${animalId}`)
            .then(response => response.text())
            .then(data => {
                alert(data);  
            })
            .catch(error => console.error('Erreur:', error));
    }
</script>


