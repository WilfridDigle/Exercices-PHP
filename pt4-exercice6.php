<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pt4-Exercice6</title>
</head>
<body> 
    <?php
        $number = 1; 
        while ($number <= 100) {
            if ($number%3 == 0 && $number%5 == 0) { ?>
                <p>FizzBuzz</p>
                <?php $number++;
            }
            elseif (!($number%3)) { ?>
                <p>Fizz</p>
                <?php $number++;
            }
            elseif (!($number%5)) { ?>
                <p>Buzz</p>
                <?php $number++;
            }
            else { ?>
                <p><?= $number ?></p>
                <?php $number++;
            }
        } ?>
</body>
</html>