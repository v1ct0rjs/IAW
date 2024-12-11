<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 28</title>
</head>
<body>
    <?php
        $numero1 = 10; 
        $numero2 = 5;  

        echo "Las variables son: <br>";
        echo "Número 1: $numero1<br>";
        echo "Número 2: $numero2<br>";

        $numero1 = $numero2;
        $numero2 = 10;

        echo "Las variables después de intercambiarlas son: <br>";
        echo "Número 1: $numero1<br>";
        echo "Número 2: $numero2<br>";
    ?>
</body>
</html>