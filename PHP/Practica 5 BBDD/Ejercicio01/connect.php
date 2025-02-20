<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión</title>
</head>
<body> 
    <?php
    $conn = mysqli_connect('10.0.20.37', 'v1ct0r', 'vmjimsan');
    if (!$conn) {
        die('No pudo conectarse: ' . mysql_error());
    }
    
    $sql = "CREATE DATABASE IF NOT EXISTS gestion";

    $tabla = "CREATE TABLE IF NOT EXISTS usuarios (";
    $tabla .= "dni PRIMARY KEY VARCHAR(9) NOT NULL, ";
    $tabla .= "nombre CHAR(50), ";
    $tabla .= "apellidos CHAR(50), ";
    $tabla .= "localidad CHAR(100), ";
    $tabla .= "centro CHAR(25), ";
    $tabla .= "usuario CHAR(50), ";
    $tabla .= "pass CHAR(50) ); ";

    if (mysql_query($sql, $conn)) {
        echo "La base de datos gestion se creó correctamente\n";
    } else {
        echo 'Error al crear la base de datos: ' . mysql_error() . "\n";
    }
    mysql_query($tabla, $conn);

    if (isset($_POST["enviar"])){
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $localidad = $_POST["localidad"];
        $centro = $_POST["centro"];
        $usuario = $_POST["usuario"];
        $pass = $_POST["pass"];

        $insert = "INSERT INTO usuarios( ";
        $insert .= "dni, nombre, apellidos, ";
        $insert .= "localidad, centro, usuario, pass) ";
        $insert .= "VALUES ($dni, $nombre, $apellidos, $localidad, $centro, $usuario, $pass); ";

        mysql_query($insert, $conn);

        $select = "SELECT * FROM usuarios WHERE usuario = $usuario";
        echo mysql_query($select, $conn);
    }
    ?>
</body>
</html>