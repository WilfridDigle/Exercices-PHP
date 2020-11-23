<?php 
    $departments = array(
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pt3-Exercice6</title>
</head>
<body>
   
        <?php foreach($departments as $departmentNumber => $departmentName) {?>
        <p>Le département <?= $departmentName ?> a le numéro <?= $departmentNumber ?>.</p>
        <?php } ?>


         
</body>
</html>