<?php 
    $age = 23;
    $gender = 'Homme';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pt2-Exercice2</title>
</head>
<body>
    <p>
        <?php
            if ($gender == 'Homme'){
                if ($age >= 18) {
                    echo 'Vous êtes un homme et vous êtes majeur.';
                }
                else {
                    echo 'Vous êtes un homme et vous êtes mineur.';
                }
            }
            if ($gender == 'Femme'){
                if ($age >= 18) {
                    echo 'Vous êtes une femme et vous êtes majeur.';
                }
                else {
                    echo 'Vous êtes une femme et vous êtes mineur.';
                }
            }
        ?>
    </p>
</body>
</html>