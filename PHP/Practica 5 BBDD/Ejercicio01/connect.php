<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión</title>
</head>
<body> 
    <?php
    $conn = mysqli_connect('10.0.20.37', 'v1ct0r', 'vmjimsan', 'gestion');
    if (!$conn) {
        die('No pudo conectarse: ' . mysqli_connect_error());
    }
    
    $sql = "CREATE DATABASE IF NOT EXISTS gestion";

    $tabla = "CREATE TABLE IF NOT EXISTS usuarios (";
    $tabla .= "dni VARCHAR(9) NOT NULL PRIMARY KEY, ";
    $tabla .= "nombre CHAR(50), ";
    $tabla .= "apellidos CHAR(50), ";
    $tabla .= "localidad CHAR(100), ";
    $tabla .= "centro CHAR(25), ";
    $tabla .= "usuario CHAR(50), ";
    $tabla .= "pass CHAR(50) ); ";

    if (mysqli_query($conn, $sql)) {
        echo "La base de datos gestion se creó correctamente\n";
    } else {
        echo 'Error al crear la base de datos: ' . mysqli_error($conn) . "\n";
    }
    mysqli_query($conn, $tabla);

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
        $insert .= "VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$centro', '$usuario', '$pass'); ";

        mysqli_query($conn, $insert);

        $select = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $result = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "DNI: " . $row["dni"] . " - Nombre: " . $row["nombre"] . " - Apellidos: " . $row["apellidos"] . "<br>";
        }
    }

        $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuariolog' AND pass = '$passlog'";
        $result = mysqli_query($conn, $consulta);
        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "DNI: " . $row["dni"] . " - Nombre: " . $row["nombre"] . " - Apellidos: " . $row["apellidos"] . "<br>";
            }
        $consulta = "SELECT * FROM usuarios WHERE usuario = $usuario";
        if (mysql_query($consulta, $conn)){
            echo mysql_query($consulta, $conn);
        }
        else {
            echo "Error de loging";
        }
    }
    ?>
</body>
</html>