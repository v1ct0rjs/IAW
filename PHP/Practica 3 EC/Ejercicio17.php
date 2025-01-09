<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio17.php">
    <label for="altura">Introduce número A</label>
    <input type="text" id="a" name="a"><br><br>
    <label for="base">Introduce número B</label>
    <input type="text" id="b" name="b"><br><br>
    <label for="base">Introduce número C</label>
    <input type="text" id="c" name="c"><br><br>
    <input type="submit" name="enviar" value="Calcular"><br>
    </form>
    <?php
    //Diseña un algoritmo que pida por teclado tres números; si el primero es negativo, debe imprimir el producto de los tres y si no lo es, imprimirá la suma.
    $a = floatval($_POST["a"]);
    $b = floatval($_POST["b"]);
    $c = floatval($_POST["c"]);

    if ( $a < 0 ){
        
        $resultado = $a * $b * $c;
        echo "<br>El producto es $resultado";
    }
    else{

        $resultado = $a + $b + $c;
        echo "<br>La suma es $resultado";

    }
    ?>
</body>
</html>