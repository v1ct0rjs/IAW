<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
</head>
<body>
<?php
    session_start();


    $fechaNacimiento = $_SESSION['edad'];
    $nombre = $_SESSION['nombre'];

    if ($fechaNacimiento) {
        $birthYear = date('Y', strtotime($fechaNacimiento));
  
        $edad = date('Y') - $birthYear;
    } else {
        $edad = 0;
    }
    echo "Nombre en MAYÚSCULAS: " . strtoupper($nombre) . "<br>";
    echo "Edad que cumple este año: " . $edad;
    ?>
</body>
</html>