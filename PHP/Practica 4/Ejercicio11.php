<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <form method="post" action="Ejercicio11.php">
        <label for="post">Cadena</label>
        <input type="text" id="var" name="var"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        echo str_replace(' ','', $_POST["var"]);
    ?>
</body>
</html>