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
    

    $tabla = "CREATE TABLE IF NOT EXISTS agenda (";
    $tabla .= "id INT NOT NULL AUTO_INCREMENT, ";
    $tabla .= "nombre CHAR(50), ";
    $tabla .= "direccion CHAR(100), ";
    $tabla .= "telefono CHAR(15), ";
    $tabla .= "email CHAR(50), ";
    $tabla .= "KEY (id) ) ";

    if (mysql_query($sql, $conn)) {
        echo "La base de datos gestion se creó correctamente\n";
    } else {
        echo 'Error al crear la base de datos: ' . mysql_error() . "\n";
    }
    mysql_query($tabla_usuarios, $conn);

    if (isset($_POST["enviar"])){

    }
    ?>
</body>
</html>