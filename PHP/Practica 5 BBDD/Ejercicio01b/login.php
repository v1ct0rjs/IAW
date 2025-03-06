<?php
// login.php

// Conexión a la BD
$socket = "/opt/lampp/var/mysql/mysql.sock";
$conexion = new mysqli("localhost", "root", "", "Gestion", $socket);
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

session_start(); // para manejar la sesión del usuario
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario  = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    if (!empty($usuario) && !empty($password)) {
        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
        if ($resultado->num_rows > 0) {
            $row = $resultado->fetch_assoc();
            // Verificamos la contraseña con password_verify
            if (password_verify($password, $row['password'])) {
                // Contraseña correcta
                $_SESSION['usuario'] = $row['usuario']; 
                $_SESSION['nombre']  = $row['nombre'];
                header("Location: bienvenida.php");
                exit;
            } else {
                $mensaje = "Contraseña incorrecta.";
            }
        } else {
            $mensaje = "No existe ningún usuario con ese nombre.";
<?php
// login.php

// Conexión a la BD
$socket = "/opt/lampp/var/mysql/mysql.sock";
$conexion = new mysqli("localhost", "root", "", "Gestion", $socket);
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

session_start(); // para manejar la sesión del usuario
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario  = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    if (!empty($usuario) && !empty($password)) {
        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
        if ($resultado->num_rows > 0) {
            $row = $resultado->fetch_assoc();
            // Verificamos la contraseña con password_verify
            if (password_verify($password, $row['password'])) {
                // Contraseña correcta
                $_SESSION['usuario'] = $row['usuario']; 
                $_SESSION['nombre']  = $row['nombre'];
                header("Location: bienvenida.php");
                exit;
            } else {
                $mensaje = "Contraseña incorrecta.";
            }
        } else {
            $mensaje = "No existe ningún usuario con ese nombre.";