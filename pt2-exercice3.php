<?php 
    $gender = 'Homme';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pt2-Exercice3</title>
</head>
<body>
    <p>
        <?php
            if ($gender != 'Homme') {
                echo 'C\'est une développeuse !!!';
            }
            else {
                echo 'C\'est un développeur !!!';
            }
        ?>
    </p>
</body>
</html>