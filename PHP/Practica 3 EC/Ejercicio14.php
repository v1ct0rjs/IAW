<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio14.php">
    <label for="altura">Introduce la altura del rectangulo en mm</label>
    <input type="text" id="altura" name="altura"><br>
    <label for="base">Introduce la base del rectangulo en mm</label>
    <input type="text" id="base" name="base"><br>
    <input type="submit" name="enviar" value="Calcular"><br>
    </form>
    <?php
    //Escribir un programa que calcule el área de un rectángulo del cual se le proporcionará por el
    //teclado su altura y anchura (números decimales).
    $altura = floatval($_POST["altura"]);
    $base = floatval($_POST["base"]);
    $area = $altura * $base;
    echo "<br>El area de un rectángulo es de $area mm cuadrados"
    ?>
</body>
</html>