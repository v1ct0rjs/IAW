<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <form method="post" action="Ejercicio16.php">
        <label for="post">Introduce número</label>
        <input type="number" id="var" name="var"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        echo pow($_POST["var"], 2);
    ?>
</body>
</html>