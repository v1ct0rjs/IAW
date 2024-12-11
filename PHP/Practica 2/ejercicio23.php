<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>
<body>
    <?php
        $precioOriginal = 100;
        $descuento = 0.10; 
        $precioConDescuento = $precioOriginal * (1 - $descuento);
        echo "El precio original del artículo es $precioOriginal.<br>";
        echo "El nuevo precio del artículo con un 10% de descuento es " . round($precioConDescuento, 2) . ".";
    ?>
</body>
</html>