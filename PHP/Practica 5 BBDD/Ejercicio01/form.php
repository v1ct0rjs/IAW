<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="post" action="connect.php">   
        <label for="dni">DNI</label>
        <input type="text" name="dni" required><br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" required><br>
        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" required><br>
        <label for="centro">Centro de estudios</label>
        <input type="text" name="centro" required><br>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" required><br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" required><br>
        <input type="submit" name="enviar" value="enviar"><br><br>
    </form>
    
</body>
</html>