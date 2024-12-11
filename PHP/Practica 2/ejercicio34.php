<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 34</title>
</head>
<body>
    <?php
        $velocidadKmh = 72; 
        $velocidadMs = $velocidadKmh * (1000/3600); 
        echo "Una velocidad de $velocidadKmh km/h equivale a " . round($velocidadMs, 2) . " m/s.";
    ?>
</body>
</html>