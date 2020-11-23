<?php 
    $age = 23;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pt2-Exercice4</title>
</head>
<body>
    <p>
        <?php
            if ($age >= 18){
                echo 'Tu es majeur';
            }
            else {
                echo 'Tu n\'es pas majeur';
            }
        ?>
    </p>
</body>
</html>