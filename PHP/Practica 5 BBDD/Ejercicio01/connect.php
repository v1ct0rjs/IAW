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
    } else {
        echo "Conexión exitosa a la base de datos.<br>";
    }
    
    $sql = "CREATE DATABASE IF NOT EXISTS gestion";
    if (mysqli_query($conn, $sql)) {
        echo "La base de datos gestion se creó correctamente.<br>";
    } else {
        echo 'Error al crear la base de datos: ' . mysqli_error($conn) . "<br>";
    }

    $tabla = "CREATE TABLE IF NOT EXISTS usuarios (
        dni VARCHAR(9) NOT NULL PRIMARY KEY, 
        nombre CHAR(50), 
        apellidos CHAR(50), 
        localidad CHAR(100), 
        centro CHAR(25), 
        usuario CHAR(50) UNIQUE, 
        pass CHAR(50)
    );";
    if (mysqli_query($conn, $tabla)) {
        echo "La tabla usuarios se creó correctamente.<br>";
    } else {
        echo 'Error al crear la tabla: ' . mysqli_error($conn) . "<br>";
    }

    if (isset($_POST["enviar"])) {
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $localidad = $_POST["localidad"];
        $centro = $_POST["centro"];
        $usuario = $_POST["usuario"];
        $pass = $_POST["pass"];

        // Verificar si el usuario ya existe
        $checkUser = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $result = mysqli_query($conn, $checkUser);
        if (mysqli_num_rows($result) > 0) {
            echo "El usuario ya existe. Por favor, elija otro nombre de usuario.<br>";
            echo '<a href="index.html">Volver a la página de inicio</a>';
        } else {
            $insert = "INSERT INTO usuarios (dni, nombre, apellidos, localidad, centro, usuario, pass) 
                       VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$centro', '$usuario', '$pass');";
            if (mysqli_query($conn, $insert)) {
                echo "Usuario registrado correctamente.<br>";
                echo '<a href="index.html">Volver a la página de inicio</a>';
                // Redirigir a la página de inicio después de 3 segundos
                header("refresh:3;url=index.html");
            } else {
                echo "Error al registrar el usuario: " . mysqli_error($conn) . "<br>";
                echo '<a href="index.html">Volver a la página de inicio</a>';
            }
        }
    }

    if (isset($_POST["conectar"])) {
        $usuariolog = $_POST["user"];
        $passlog = $_POST["pass"];

        $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuariolog' AND pass = '$passlog'";
        $result = mysqli_query($conn, $consulta);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Bienvenido, " . $row["nombre"] . " " . $row["apellidos"] . ".<br>";
                echo "DNI: " . $row["dni"] . " - Localidad: " . $row["localidad"] . " - Centro: " . $row["centro"] . "<br>";
            }
        } else {
            echo "Error de login. Usuario o contraseña incorrectos.<br>";
            echo '<a href="index.html">Volver a la página de inicio</a>';
        }
    }

    mysqli_close($conn);
    ?>
</body>
</html>