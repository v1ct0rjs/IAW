<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdasignatura";
$socket = "/opt/lampp/var/mysql/mysql.sock";
$conn = mysqli_connect($servername, $username, $password, $dbname, null, $socket);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$sql = "SELECT cod_asignatura, nombre_asignatura, num_creditos FROM asignaturas";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h1>Lista de Asignaturas</h1>";
    echo "<table border='1'>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Créditos</th>
            </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row["cod_asignatura"]}</td>
                <td>{$row["nombre_asignatura"]}</td>
                <td>{$row["num_creditos"]}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay asignaturas registradas.";
}

mysqli_close($conn);
?>

<br>
<a href="index.html">Volver al inicio</a>