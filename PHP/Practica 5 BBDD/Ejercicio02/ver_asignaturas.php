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

$sql = "SELECT codigo, nombre, creditos FROM asignaturas";
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
                <td>" . $row["codigo"] . "</td>
                <td>" . $row["nombre"] . "</td>
                <td>" . $row["creditos"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay asignaturas registradas.";
}

mysqli_close($conn);
?>