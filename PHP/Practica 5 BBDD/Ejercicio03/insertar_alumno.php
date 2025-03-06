<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Alumno</title>
</head>
<body>
    <h1>Insertar Alumno</h1>
    <form action="" method="POST">
        <label>DNI:</label><br>
        <input type="text" name="dni" required><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Apellidos:</label><br>
        <input type="text" name="apellidos" required><br><br>

        <label>Localidad:</label><br>
        <input type="text" name="localidad"><br><br>

        <label>Año inicio estudios:</label><br>
        <input type="number" name="anyo_inicio_estudios"><br><br>

        <label>Modo de acceso:</label><br>
        <input type="text" name="modo_acceso"><br><br>

        <button type="submit">Insertar</button>
    </form>

    <?php
    $socket = "/opt/lampp/var/mysql/mysql.sock";
    $conexion = mysqli_connect("localhost", "root", "", "bdasignatura", null, $socket);

    if (!$conexion) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    mysqli_set_charset($conexion, "utf8mb4");

    $mensaje = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dni         = $_POST['dni'] ?? '';
        $nombre      = $_POST['nombre'] ?? '';
        $apellidos   = $_POST['apellidos'] ?? '';
        $localidad   = $_POST['localidad'] ?? '';
        $anyo_inicio = $_POST['anyo_inicio_estudios'] ?? null;
        $modo_acceso = $_POST['modo_acceso'] ?? '';

        if (!empty($dni) && !empty($nombre) && !empty($apellidos)) {
            $sql_check = "SELECT 1 FROM alumnos WHERE dni = ?";
            $stmt_check = mysqli_prepare($conexion, $sql_check);
            mysqli_stmt_bind_param($stmt_check, "s", $dni);
            mysqli_stmt_execute($stmt_check);
            $res_check = mysqli_stmt_get_result($stmt_check);

            if (mysqli_num_rows($res_check) > 0) {
                $mensaje = "Ya existe un alumno con el DNI '$dni'.";
            } else {
                $sql_insert = "INSERT INTO alumnos 
                    (dni, nombre, apellidos, localidad, anyo_inicio_estudios, modo_acceso)
                    VALUES (?, ?, ?, ?, ?, ?)";
                $stmt_insert = mysqli_prepare($conexion, $sql_insert);
                mysqli_stmt_bind_param(
                    $stmt_insert,
                    "ssssis",
                    $dni,
                    $nombre,
                    $apellidos,
                    $localidad,
                    $anyo_inicio,
                    $modo_acceso
                );

                if (mysqli_stmt_execute($stmt_insert)) {
                    $mensaje = "Alumno insertado correctamente.";
                } else {
                    $mensaje = "Error al insertar el alumno: " . mysqli_error($conexion);
                }

                mysqli_stmt_close($stmt_insert);
            }

            mysqli_stmt_close($stmt_check);
        } else {
            $mensaje = "Los campos DNI, nombre y apellidos son obligatorios.";
        }
    }

    echo "<p>$mensaje</p>";
    mysqli_close($conexion);
    ?>

    <a href="index.php">Volver al inicio</a><br>
    <a href="ver_alumnos.php">Ver Alumnos</a>
</body>
</html>