<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 33</title>
</head>
<body>
    <h3>Números primos</h3>
    <form name="prueba" method="post" action="Ejercicio33.php">
        <label for="valores">Número 1</label><br>
        <input type="text" id="Numero1" name="n1"><br>
        <label for="valores">Número 2</label><br>
        <input type="text" id="Numero2" name="n2"><br><br>
        <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Imprimir los números primos comprendidos en un rango entre dos números dados. El primer
    //número será el límite inferior y el segundo el límite superior.
    $n1 = intval($_POST["n1"]);
    $n2 = intval($_POST["n2"]);

    for ($i = $n1; $i <= $n2; $i++) {
        $contador = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $contador++;
            }
        }
        if ($contador == 2) {
            echo "$i es primo <br>";
        }
    }
    ?>
</body>
</html>