<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Profesores</title>
</head>
<body>
    <form action="Eliminar Profesor por DNI" method="post">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required><br><br>
        <input type="submit" value="Registrar">

    </form>
    <?php
        $socket = "/opt/lampp/var/mysql/mysql.sock";
        $conexion = mysqli_connect("localhost", "root", "", "academia", null, $socket);
     
        if (!$conexion) {
             die("Error en la conexión: " . mysqli_connect_error());
        }
     
        mysqli_set_charset($conexion, "utf8mb4");
         
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dni = $_POST['dni'] ?? '';
        }
        $delete = "DELETE FROM profesores WHERE dni = (?)";
        mysqli_query($conexion, $delete);    
    ?>
    <a href="index.php">Volver al inicio</a>
</body>
</html>