<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <?php
        session_start();
        echo $_SESSION['edad'];
        echo "<br>";
        echo $_SESSION['nombre'];
    ?>
    <button onclick="window.location.href='edit.php'">Siguiente</button>
</body>
</html>