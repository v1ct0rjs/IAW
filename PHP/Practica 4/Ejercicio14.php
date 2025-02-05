<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <form method="post" action="">
        <label for="var">Cadena</label>
        <input type="text" id="var" name="var"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>

    <?php
    if (isset($_POST["enviar"]) && !empty($_POST["var"])) {
        $claves = explode(" ", $_POST["var"]); 
        $longitud = count($claves); 
        for ($i = 0; $i < $longitud; $i++) { 
            echo $claves[$i] . "<br>";
        }
    }
    ?>
</body>
</html>
