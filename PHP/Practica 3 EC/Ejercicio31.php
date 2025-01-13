<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 31</title>
</head>
<body>
    <h3>Notas de alumnos</h3>
    <form name="prueba" method="post" action="Ejercicio31.php">
        <label for="valores">Nota 1</label><br>
        <input type="text" id="nota1" name="n1"><br>
        <label for="valores">Nota 2</label><br>
        <input type="text" id="nota2" name="n2"><br>
        <label for="valores">Nota 3</label><br>
        <input type="text" id="nota3" name="n3"><br>
        <label for="valores">Nota 4</label><br>
        <input type="text" id="nota4" name="n4"><br>
        <label for="valores">Nota 5</label><br>
        <input type="text" id="nota5" name="n5"><br>
        <label for="valores">Nota 6</label><br>
        <input type="text" id="nota6" name="n6"><br>
        <label for="valores">Nota 7</label><br>
        <input type="text" id="nota7" name="n7"><br>
        <label for="valores">Nota 8</label><br>
        <input type="text" id="nota8" name="n8"><br>
        <label for="valores">Nota 9</label><br>
        <input type="text" id="nota9" name="n9"><br>
        <label for="valores">Nota 10</label><br>
        <input type="text" id="nota10" name="n10"><br>
        <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Escribir un programa que lea 10 notas de alumnos y nos informe cuántos tienen notas mayores o iguales a 7 y cuántos menores.
    $n1 = floatval($_POST["n1"]);
    $n2 = floatval($_POST["n2"]);
    $n3 = floatval($_POST["n3"]);
    $n4 = floatval($_POST["n4"]);
    $n5 = floatval($_POST["n5"]);
    $n6 = floatval($_POST["n6"]);
    $n7 = floatval($_POST["n7"]);
    $n8 = floatval($_POST["n8"]);
    $n9 = floatval($_POST["n9"]);
    $n10 = floatval($_POST["n10"]);

    $mayores = 0;
    $menores = 0;

    if ($n1 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($n2 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($n3 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($n4 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($n5 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($n6 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($n7 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($n8 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($n9 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($n10 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    echo "La cantidad de alumnos con notas mayores o iguales a 7 es: $mayores <br>";
    echo "La cantidad de alumnos con notas menores a 7 es: $menores";
    
    ?>
    
</body>
</html>