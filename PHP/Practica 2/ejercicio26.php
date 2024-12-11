<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>
<body>
    <?php
        $sueldoEmpleado1 = 1000; 
        $sueldoEmpleado2 = 1200; 
        $sueldoEmpleado3 = 1500; 

        $incremento1 = 0.13; 
        $incremento2 = 0.26;
        $incremento3 = 0.39;

        $nuevoSueldo1 = $sueldoEmpleado1 * (1 + $incremento1);
        $nuevoSueldo2 = $sueldoEmpleado2 * (1 + $incremento2);
        $nuevoSueldo3 = $sueldoEmpleado3 * (1 + $incremento3);

        echo "El nuevo sueldo del empleado 1 tras un incremento del 13% es " . round($nuevoSueldo1, 2) . ".<br>";
        echo "El nuevo sueldo del empleado 2 tras un incremento del 26% es " . round($nuevoSueldo2, 2) . ".<br>";
        echo "El nuevo sueldo del empleado 3 tras un incremento del 39% es " . round($nuevoSueldo3, 2) . ".";
    ?>
</body>
</html>