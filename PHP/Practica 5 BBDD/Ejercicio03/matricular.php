<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Matricular</title>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$socket = "/opt/lampp/var/mysql/mysql.sock";
$conn = mysqli_connect("localhost", "root", "", "bdasignatura", null, $socket);

if (!$conn) {
    die("Error de conexión");
}

$alumnos = mysqli_query($conn, "SELECT id_alumno, nombre, apellidos FROM alumnos");
$asignaturas = mysqli_query($conn, "SELECT id_asignatura, nombre_asignatura FROM asignaturas");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id_alumno = $_POST["id_alumno"];
    $id_asignatura = $_POST["id_asignatura"];
    $sql = "INSERT INTO matriculas (id_alumno, id_asignatura) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $id_alumno, $id_asignatura);
    if (mysqli_stmt_execute($stmt)) {
        echo "Matriculación completada";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
}
?>
<h1>Matricular Alumno en Asignatura</h1>
<form method="POST" action="">
    <label>Alumno:</label>
    <select name="id_alumno">
        <?php
        while ($row = mysqli_fetch_assoc($alumnos)) {
            echo "<option value='" . $row['id_alumno'] . "'>" . $row['nombre'] . " " . $row['apellidos'] . "</option>";
        }
        ?>
    </select>
    <br><br>
    <label>Asignatura:</label>
    <select name="id_asignatura">
        <?php
        while ($row = mysqli_fetch_assoc($asignaturas)) {
            echo "<option value='" . $row['id_asignatura'] . "'>" . $row['nombre_asignatura'] . "</option>";
        }
        ?>
    </select>
    <br><br>
    <input type="submit" value="Matricular">
</form>
<?php mysqli_close($conn); ?>
<br>
<a href="index.php">Volver al inicio</a><br>
<a href="insertar_alumno.php">Insertar Alumno</a><br>
<a href="ver_matriculas.php">Ver Matrículas</a>
</body>
</html>