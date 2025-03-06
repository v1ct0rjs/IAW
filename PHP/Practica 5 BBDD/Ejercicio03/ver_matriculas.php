<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Matrículas</title>
</head>
<body>
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
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = "SELECT m.id_matricula, CONCAT(a.nombre, ' ', a.apellidos) AS alumno, asig.nombre_asignatura
        FROM matriculas m
        JOIN alumnos a ON m.id_alumno = a.id_alumno
        JOIN asignaturas asig ON m.id_asignatura = asig.id_asignatura
        ORDER BY m.id_matricula ASC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h1>Listado de Matrículas</h1>";
    echo "<table border='1'>
            <tr>
                <th>ID Matrícula</th>
                <th>Alumno</th>
                <th>Asignatura</th>
            </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row["id_matricula"]}</td>
                <td>{$row["alumno"]}</td>
                <td>{$row["nombre_asignatura"]}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay matrículas registradas.";
}

mysqli_close($conn);
?>
<br>
<a href="index.html">Volver al inicio</a>
</body>
</html>