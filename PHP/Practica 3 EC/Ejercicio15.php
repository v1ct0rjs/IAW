<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio15.php">
    <label for="altura">Introduce un número</label>
    <input type="text" id="a" name="a"><br><br>
    <label for="base">Introduce otro número</label>
    <input type="text" id="b" name="b"><br><br>
    <input type="submit" name="enviar" value="Calcular"><br>
    </form>
    <?php
    //Escribir un programa que lea dos números y diga cual es el mayor y cual el menor.

    $a = floatval($_POST["a"]);
    $b = floatval($_POST["b"]);
    if ( $a > $b ){
        echo "<br>El número mayor es $a";
    }
    elseif ($a == $b){
        echo "<br>El número $a es igual a $b";
    }
    else{
        echo "<br>El número mayor es $b";
    }
    ?>
</body>
</html>