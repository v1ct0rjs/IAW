<?php
// registro.php

// 1) Conexión a la BD
$socket = "/opt/lampp/var/mysql/mysql.sock";
$conexion = new mysqli("localhost", "root", "", "Gestion", $socket);
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recogemos los datos del formulario
    $dni            = trim($_POST['dni']);
    $nombre         = trim($_POST['nombre']);
    $apellidos      = trim($_POST['apellidos']);
    $localidad      = trim($_POST['localidad']);
    $centro_estudios= trim($_POST['centro_estudios']);
    $usuario        = trim($_POST['usuario']);
    $password       = trim($_POST['password']);
    
    // Validamos que no vengan campos vacíos
    if (
        !empty($dni) && 
        !empty($nombre) && 
        !empty($apellidos) && 
        !empty($localidad) && 
        !empty($centro_estudios) &&
        !empty($usuario) && 
        !empty($password)
    ) {
        // Comprobamos si el usuario ya existe
        $sql_check = "SELECT * FROM usuarios WHERE usuario = ?";
        $stmt = $conexion->prepare($sql_check);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
        if ($resultado->num_rows > 0) {
            $mensaje = "El usuario ya existe. Prueba con otro nombre de usuario.";
        } else {
            // Insertamos el usuario en la base de datos
            // Recomendable guardar la contraseña con password_hash
            $pass_encriptada = password_hash($password, PASSWORD_DEFAULT);

            $sql_insert = "INSERT INTO usuarios (DNI, nombre, apellidos, localidad, centro_estudios, usuario, password) 
                           VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt_insert = $conexion->prepare($sql_insert);
            $stmt_insert->bind_param("sssssss", 
                $dni, $nombre, $apellidos, $localidad, $centro_estudios, $usuario, $pass_encriptada
            );
            if ($stmt_insert->execute()) {
                $mensaje = "Usuario registrado con éxito.";
            } else {
                $mensaje = "Error al registrar el usuario: " . $conexion->error;
            }
        }
        $stmt->close();
        $stmt_insert->close();
    } else {
        $mensaje = "Todos los campos son obligatorios.";
    }
}

$conexion->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form method="POST" action="">
        <label>DNI:</label><br>
        <input type="text" name="dni" required><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Apellidos:</label><br>
        <input type="text" name="apellidos" required><br><br>

        <label>Localidad:</label><br>
        <input type="text" name="localidad" required><br><br>

        <label>Centro de Estudios:</label><br>
        <input type="text" name="centro_estudios" required><br><br>

        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Registrar</button>
    </form>
    <p><?php echo $mensaje; ?></p>
    <a href="index.php">Volver a la página de inicio</a>
</body>
</html>