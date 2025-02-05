<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
<form method="post" action="Ejercicio18.php">
    <label for="post">Número</label>
    <input type="number" id="var1" name="var1"><br>
    <input type="submit" name="enviar" value="Enviar"><br><br>
</form>
    <?php
        if (isset($_POST["enviar"]) && !empty($_POST["var1"])) {
            $num = floatval($_POST["var1"]);
            echo floor($num);
        }
    ?>
</body>
</html>