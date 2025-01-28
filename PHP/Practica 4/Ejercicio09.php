<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
</head>
<body>
    <form method="post" action="Ejercicio09.php">
        <label for="post">Cadena</label>
        <input type="text" id="var" name="var"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        echo str_replace("yo" , "tu" , $_POST["var"]);
    ?>
    
</body>
</html>