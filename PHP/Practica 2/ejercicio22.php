<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
</head>
<body>
    <?php
        $radio = 7; 
        $longitud = 2 * pi() * $radio;
        $areaCirculo = pi() * ($radio * $radio);
        echo "La longitud de un círculo con radio $radio es igual a " . round($longitud, 2) . ".<br>";
        echo "El área de un círculo con radio $radio es igual a " . round($areaCirculo, 2) . ".";
    ?>
</body>
</html>