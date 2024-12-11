<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 33</title>
</head>
<body>
    <?php
        $cateto1 = 3;
        $cateto2 = 4;
        
        $hipotenusa = ($cateto1 * $cateto1 + $cateto2 * $cateto2) ** 0.5;
        
        echo "Dado un triángulo con catetos $cateto1 y $cateto2, la hipotenusa es " . round($hipotenusa, 2) . ".";
    ?>
</body>
</html>