<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 29</title>
</head>
<body>
    <?php
        $mes = "octubre";
        $importe = 200; 
        $descuento = 0.15;
        $importeFinal = $importe * $descuento;
        echo "El importe en el mes $mes final a cobrar es: " . round($importeFinal, 2) . ".";
    ?>
</body>
</html>
