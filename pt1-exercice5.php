<?php 
    $answer = 'no';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pt1-Exercice5</title>
</head>
<body>
    <p>
        <?php
            if ($answer == 'yes') {
                echo 'Vous avez répondu "oui".';
            }
            else if ($answer == 'no') {
                echo 'Vous avez répondu "non".';
            }
        ?>
    </p>
</body>
</html>