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
    $nombre = $_POST["nombre"];
    $creditos = $_POST["creditos"];

    $sql = "INSERT INTO asignaturas (nombre, creditos) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "si", $nombre, $creditos);

        if (mysqli_stmt_execute($stmt)) {
            echo "Nueva asignatura registrada exitosamente";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header("Location: ver_asignaturas.php");
    exit();
}

mysqli_close($conn);
?>