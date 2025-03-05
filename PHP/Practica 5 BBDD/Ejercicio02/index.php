<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Asignatura</title>
</head>
<body>
    <h1>Registrar Asignatura</h1>
    <form action="insertar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="creditos">Créditos:</label>
        <input type="number" id="creditos" name="creditos" required><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>