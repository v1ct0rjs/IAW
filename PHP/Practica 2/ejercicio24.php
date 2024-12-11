<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
<body>
    <?php
        $numAlumnos = 20; 
        $numAlumnas = 30;

        $totalEstudiantes = $numAlumnos + $numAlumnas;
        $porcentajeAlumnos = ($numAlumnos / $totalEstudiantes) * 100;
        $porcentajeAlumnas = ($numAlumnas / $totalEstudiantes) * 100;

        echo "Cantidad de alumnos: $numAlumnos<br>";
        echo "Cantidad de alumnas: $numAlumnas<br>";
        echo "Porcentaje de alumnos: " . round($porcentajeAlumnos, 2) . "%<br>";
        echo "Porcentaje de alumnas: " . round($porcentajeAlumnas, 2) . "%<br>";
    ?>
</body>
</html>