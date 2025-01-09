<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio16.php">
    <label for="altura">Introduce número A</label>
    <input type="text" id="a" name="a"><br><br>
    <label for="base">Introduce número B</label>
    <input type="text" id="b" name="b"><br><br>
    <label for="base">Introduce número C</label>
    <input type="text" id="c" name="c"><br><br>
    <input type="submit" name="enviar" value="Calcular"><br>
    </form>
    <?php
    //Escriba un programa que lea tres números enteros positivos, y que calcule e imprima en pantalla el menor y el mayor de todos ellos.

    $a = floatval($_POST["a"]);
    $b = floatval($_POST["b"]);
    $c = floatval($_POST["c"]);

    if ( $a >= 0 && $b >= 0 && $c >= 0 ){
        if ( $a > $b && $c < $a ) {
            echo "<br>El número mayor es $a";
            if ( $b > $c ) {
                echo "<br>Y el número menor es $c";
            }
                else {
                    echo "<br>Y el número menor es $b";
                }
        }
        if ( $b > $a && $c < $b ) {
            echo "<br>El número mayor es $b";
            if ( $a > $c ) {
                echo "<br>Y el número menor es $a";
            }
                else {
                    echo "<br>Y el número menor es $c";
                }
        }
        if ( $c > $a && $b < $c ) {
            echo "<br>El número mayor es $c";
            if ( $a > $b ) {
                echo "<br>Y el número menor es $a";
            }
                else {
                    echo "<br>Y el número menor es $b";
                }
        }
    }
    else{
        echo "<br>ERROR, Ha introducido un número negativo";
    }
    ?>
</body>
</html>