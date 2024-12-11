<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 30</title>
</head>
<body>
    <?php
        $horasTrabajadas = 45; 
        $tarifaPorHora = 20; 
        $horasNormales = 40;
        $incrementoExtra = 1.5;
        $horasExtras = $horasTrabajadas - $horasNormales;
        $salario = $horasExtras * $tarifaPorHora * $incrementoExtra;
        echo "El salario del trabajador es: $" . round($salario, 2) . ".";
    ?>
</body>
</html>