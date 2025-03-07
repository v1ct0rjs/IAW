<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
</head>
<body>
    <form action="Datos Alumno" method="post" action="generarInforme.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="asistencias">Asistencias:</label>
        <input type="number" id="asistencias" name="asistencias" required><br><br>

        <label for="faltas">Faltas:</label>
        <input type="number" id="faltas" name="faltas" required><br><br>

        <label for="justificadas">Faltas justificadas:</label>
        <input type="number" id="justificadas" name="justificadas" required><br><br>

        <input type="submit" value="Calcular">
    </form>

</body>
</html>