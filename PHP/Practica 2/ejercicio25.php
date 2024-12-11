<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
<body>
    <?php
        $cantidadInicial = 1000; 
        $interes = 0.20;
        $cantidadFinal = $cantidadInicial * (1 + $interes);
        echo "La cantidad inicial de dinero es $cantidadInicial.<br>";
        echo "La cantidad final de dinero tras aplicarse un 20% de interés es " . round($cantidadFinal, 2) . ".";
    ?>
</body>
</html>