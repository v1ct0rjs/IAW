<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio20.php">
    <label for="altura">Introduce número A </label>
    <input type="text" id="a" name="a"><br>
    <label for="altura">Introduce número B </label>
    <input type="text" id="b" name="b"><br>
    <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Implemente el algoritmo de Euclides para encontrar el mcd de dos números leídos desde teclado.
    $a = floatval($_POST["a"]);
    $b = floatval($_POST["b"]);
    
    while ($b != 0) {
        $i = $b;
        $b = $a % $b;
        $a = $i;
    }
    
    echo "El MCD es: " . $a;

    ?>
</body>
</html>