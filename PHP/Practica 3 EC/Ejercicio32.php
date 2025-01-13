<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 32</title>
</head>
<body>
    <h3>Múltiplos de 3 y 5</h3>
    <form name="prueba" method="post" action="Ejercicio31.php">
        <label for="valores">Número 1</label><br>
        <input type="text" id="Numero1" name="n1"><br>
        <label for="valores">Número 2</label><br>
        <input type="text" id="Numero2" name="n2"><br>
        <label for="valores">Número 3</label><br>
        <input type="text" id="Numero3" name="n3"><br>
        <label for="valores">Número 4</label><br>
        <input type="text" id="Numero4" name="n4"><br>
        <label for="valores">Número 5</label><br>
        <input type="text" id="Numero5" name="n5"><br>
        <label for="valores">Número 6</label><br>
        <input type="text" id="Numero6" name="n6"><br>
        <label for="valores">Número 7</label><br>
        <input type="text" id="Numero7" name="n7"><br>
        <label for="valores">Número 8</label><br>
        <input type="text" id="Numero8" name="n8"><br>
        <label for="valores">Número 9</label><br>
        <input type="text" id="Numero9" name="n9"><br>
        <label for="valores">Número 10</label><br>
        <input type="text" id="Numero10" name="n10"><br>
        <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Escribir un programa que lea 10 números enteros y luego muestre cuántos valores son
    //múltiplos de 3 y cuántos son de 5, por otro lado, se deberá indicar cuantos números son múltiplos de ambos a
    //la vez
    $n1 = intval($_POST["n1"]);
    $n2 = intval($_POST["n2"]);
    $n3 = intval($_POST["n3"]);
    $n4 = intval($_POST["n4"]);
    $n5 = intval($_POST["n5"]);
    $n6 = intval($_POST["n6"]);
    $n7 = intval($_POST["n7"]);
    $n8 = intval($_POST["n8"]);
    $n9 = intval($_POST["n9"]);
    $n10 = intval($_POST["n10"]);

    $multiplos3 = 0;
    $multiplos5 = 0;
    $multiplos3y5 = 0;

    if ($n1 % 3 == 0 && $n1 % 5 == 0) {
        $multiplos3y5++;
    } elseif ($n1 % 3 == 0) {
        $multiplos3++;
    } elseif ($n1 % 5 == 0) {
        $multiplos5++;
    }

    if ($n2 % 3 == 0 && $n2 % 5 == 0) {
        $multiplos3y5++;
    } elseif ($n2 % 3 == 0) {
        $multiplos3++;
    } elseif ($n2 % 5 == 0) {
        $multiplos5++;
    }

    if ($n3 % 3 == 0 && $n3 % 5 == 0) {
        $multiplos3y5++;
    } elseif ($n3 % 3 == 0) {
        $multiplos3++;
    } elseif ($n3 % 5 == 0) {
        $multiplos5++;
    }

    if ($n4 % 3 == 0 && $n4 % 5 == 0) {
        $multiplos3y5++;
    } elseif ($n4 % 3 == 0) {
        $multiplos3++;
    } elseif ($n4 % 5 == 0) {
        $multiplos5++;
    }

    if ($n5 % 3 == 0 && $n5 % 5 == 0) {
        $multiplos3y5++;
    } elseif ($n5 % 3 == 0) {
        $multiplos3++;
    } elseif ($n5 % 5 == 0) {
        $multiplos5++;
    }

    if ($n6 % 3 == 0 && $n6 % 5 == 0) {
        $multiplos3y5++;
    } elseif ($n6 % 3 == 0) {
        $multiplos3++;
    } elseif ($n6 % 5 == 0) {
        $multiplos5++;
    }

    if ($n7 % 3 == 0 && $n7 % 5 == 0) {
        $multiplos3y5++;
    } elseif ($n7 % 3 == 0) {
        $multiplos3++;
    } elseif ($n7 % 5 == 0) {
        $multiplos5++;
    }

    if ($n8 % 3 == 0 && $n8 % 5 == 0) {
        $multiplos3y5++;
    } elseif ($n8 % 3 == 0) {
        $multiplos3++;
    } elseif ($n8 % 5 == 0) {
        $multiplos5++;
    }

    if ($n9 % 3 == 0 && $n9 % 5 == 0) {
        $multiplos3y5++;
    } elseif ($n9 % 3 == 0) {
        $multiplos3++;
    } elseif ($n9 % 5 == 0) {
        $multiplos5++;
    }

    if ($n10 % 3 == 0 && $n10 % 5 == 0) {
        $multiplos3y5++;
    } elseif ($n10 % 3 == 0) {
        $multiplos3++;
    } elseif ($n10 % 5 == 0) {
        $multiplos5++;
    }
    
    ?>
    
</body>
</html>