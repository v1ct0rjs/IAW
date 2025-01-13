<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 29</title>
</head>
<body>
    <?php
    //Realizar un programa que imprima en pantalla los números primos comprendidos entre 1 y el 100
    $primos = array();
    for ($i = 1; $i <= 100; $i++) {
        $cont = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $cont++;
            }
        }
        if ($cont == 2) {
            echo $i . " ";
        }
    }

    ?>
</body>
</html>