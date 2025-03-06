<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Alumnos</title>
</head>
<body>
    <h1>Listado de Alumnos</h1>
    <?php
    $socket = "/opt/lampp/var/mysql/mysql.sock";
    $conexion = mysqli_connect("localhost", "root", "", "bdasignatura", null, $socket);

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT id_alumno, nombre, apellidos FROM alumnos";
    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Apellidos</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id_alumno"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellidos"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No hay resultados";
    }

    mysqli_close($conexion);
    ?>
    <br>
    <a href="index.php">Volver al inicio</a>
</body>
</html>