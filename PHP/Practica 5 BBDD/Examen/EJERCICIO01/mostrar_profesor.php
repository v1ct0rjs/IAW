<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Profesores</title>
</head>
<body>
    <?php
    $socket = "/opt/lampp/var/mysql/mysql.sock";
    $conexion = mysqli_connect("localhost", "root", "", "academia", null, $socket);

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT nombre, apellidos, especialidad, fecha_contratacion FROM profesores";
    $result = mysqli_query($conexion, $sql); 
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Apellidos</th></tr>Especialidad</th></tr>Fecha contraracion</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["apellidos"] . "</td><td>" . $row["especialidad"] . "</td><td>" . $row["fecha_contratacion"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No hay resultados";
    }
    mysqli_close($conexion);
    ?>
    <br>
    
</body>
</html>