<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <form method="post" action="Ejercicio10.php">
        <label for="post">Escribe cadena</label>
        <input type="text" id="var" name="var"><br>
        <label for="post">¿Qué buscar?</label>
        <input type="text" id="a" name="var"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        echo strpos($_POST["var"], $_POST["a"]);
    ?>
</body>
</html>