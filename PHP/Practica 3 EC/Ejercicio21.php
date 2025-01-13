<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio21.php">
    <label for="altura">Introduce coeficiente A </label>
    <input type="text" id="a" name="a"><br>
    <label for="altura">Introduce coeficiente B </label>
    <input type="text" id="b" name="b"><br>
    <label for="altura">Introduce coeficiente C </label>
    <input type="text" id="c" name="c"><br>
    <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Escriba un programa que lea los coeficientes a, b y c de una ecuación de segundo, y estudie si
    //tiene o no solución. En caso positivo, las soluciones se calcularán e imprimirán en pantalla.
    //
    $a = floatval($_POST["a"]);
    $b = floatval($_POST["b"]);
    $c = floatval($_POST["c"]);

    $D = ($b ** 2) - (4 * $a * $c);
    if ($D >= 0){
        echo "La ecuación tiene solucion";
    }
    else {
        echo "La ecuación no tiene solucion";
    }
    ?>
</body>
</html>