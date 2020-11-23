<?php 
    $age = 23;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pt2-Exercice1</title>
</head>
<body>
        <?php if ($age >= 18 && $age < 130){ ?>
        <p>Vous êtes majeur.</p>
        <?php } else if ($age > 0 && $age < 18) { ?>
        <p>Vous êtes mineur.</p>
        <?php } else { ?>
        <p>Vous êtes un mytho.</p>
        <?php } ?>
</body>
</html>