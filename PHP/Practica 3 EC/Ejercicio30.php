<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 30</title>
</head>
<body>
    <h3>Suma y promedio de 10 valores</h3>
    <form name="prueba" method="post" action="Ejercicio30.php">
        <label for="valores">Valor 1</label><br>
        <input type="text" id="valor1" name="v1"><br>
        <label for="valores">Valor 2</label><br>
        <input type="text" id="valor2" name="v2"><br>
        <label for="valores">Valor 3</label><br>
        <input type="text" id="valor3" name="v3"><br>
        <label for="valores">Valor 4</label><br>
        <input type="text" id="valor4" name="v4"><br>
        <label for="valores">Valor 5</label><br>
        <input type="text" id="valor5" name="v5"><br>
        <label for="valores">Valor 6</label><br>
        <input type="text" id="valor6" name="v6"><br>
        <label for="valores">Valor 7</label><br>
        <input type="text" id="valor7" name="v7"><br>
        <label for="valores">Valor 8</label><br>
        <input type="text" id="valor8" name="v8"><br>
        <label for="valores">Valor 9</label><br>
        <input type="text" id="valor9" name="v9"><br>
        <label for="valores">Valor 10</label><br>
        <input type="text" id="valor10" name="v10"><br>
        <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Desarrollar un programa que permita introducir 10 valores dado y nos muestre la suma de los valores ingresados y su promedio.
    $v1 = floatval($_POST["v1"]);
    $v2 = floatval($_POST["v2"]);
    $v3 = floatval($_POST["v3"]);
    $v4 = floatval($_POST["v4"]);
    $v5 = floatval($_POST["v5"]);
    $v6 = floatval($_POST["v6"]);
    $v7 = floatval($_POST["v7"]);
    $v8 = floatval($_POST["v8"]);
    $v9 = floatval($_POST["v9"]);
    $v10 = floatval($_POST["v10"]);

    $suma = $v1 + $v2 + $v3 + $v4 + $v5 + $v6 + $v7 + $v8 + $v9 + $v10;
    $promedio = $suma / 10;
    
    echo "La suma de los valores es: $suma <br>";
    echo "El promedio de los valores es: $promedio";

    ?>
    
</body>
</html>