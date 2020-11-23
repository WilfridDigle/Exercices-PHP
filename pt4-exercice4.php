<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pt4-Exercice4</title>
</head>
<body>
    <p>
        <?php 
            function Identity($lastName, $firstName, $age){
                    echo 'Bonjour ' . $lastName . ' ' . $firstName . ', tu as ' . $age . ' ans.';
            }
            Identity('DIGLÉ', 'Wilfrid', 23);
        ?>
    </p>
</body>
</html>