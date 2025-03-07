<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Profesor</title>
</head>
<body>
    <form action="isertar_profesores" method="post">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apelidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="especialidad">Especialidad:</label>
        <input type="text" id="especialidad" name="especialidad" required><br><br>

        <label for="apelidos">Fecha de contratacion:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <input type="submit" value="Registrar">
    </form>
    <?php
        $socket = "/opt/lampp/var/mysql/mysql.sock";
        $conexion = mysqli_connect("localhost", "root", "", "academia", null, $socket);
     
        if (!$conexion) {
             die("Error en la conexión: " . mysqli_connect_error());
        }
     
         mysqli_set_charset($conexion, "utf8mb4");
         
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dni         = $_POST['dni'] ?? '';
            $nombre      = $_POST['nombre'] ?? '';
            $apellidos   = $_POST['apellidos'] ?? '';
            $especialidad   = $_POST['especialidad'] ?? '';
            $fecha = $_POST['decha'] ?? '';
        }
        $sql_insert = "INSERT INTO profesores (dni, nombre, apellidos, especialidad, fecha_contratacion) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt_insert = mysqli_prepare($conexion, $sql_insert);
        mysqli_stmt_bind_param(
            $stmt_insert,
            $dni,
            $nombre,
            $apellidos,
            $especialidad,
            $fecha
        );
        if (mysqli_stmt_execute($stmt_insert)) {
            $mensaje = "Profesor insertado correctamente.";
        } else {
            $mensaje = "Error al insertar el profesor: " . mysqli_error($conexion);
        }
        mysql_close();    
    ?>
    <a href="index.php">Volver al inicio</a><br>
</body>
</html>