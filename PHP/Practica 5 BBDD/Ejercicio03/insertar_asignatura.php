<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Asignatura</title>
</head>
<body>
    <h1>Registrar Asignatura</h1>
    <form action="insertar_asignatura.php" method="post">
        <label for="cod_asignatura">Código de la asignatura:</label>
        <input type="text" id="cod_asignatura" name="cod_asignatura" required><br><br>

        <label for="nombre_asignatura">Nombre de la asignatura:</label>
        <input type="text" id="nombre_asignatura" name="nombre_asignatura" required><br><br>

        <label for="num_creditos">Número de créditos:</label>
        <input type="number" id="num_creditos" name="num_creditos" required><br><br>

        <input type="submit" value="Registrar">
    </form>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdasignatura";
    $socket = "/opt/lampp/var/mysql/mysql.sock";

    $conn = mysqli_connect($servername, $username, $password, $dbname, null, $socket);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cod_asignatura    = $_POST["cod_asignatura"];
        $nombre_asignatura = $_POST["nombre_asignatura"];
        $num_creditos      = $_POST["num_creditos"];

        $sql = "INSERT INTO asignaturas (cod_asignatura, nombre_asignatura, num_creditos) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssi", $cod_asignatura, $nombre_asignatura, $num_creditos);

            if (mysqli_stmt_execute($stmt)) {
                echo "Nueva asignatura registrada exitosamente";
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error en la preparación de la sentencia: " . mysqli_error($conn);
        }

        header("Location: ver_asignaturas.php");
        exit();
    }

    mysqli_close($conn);
    ?>
</body>
</html>