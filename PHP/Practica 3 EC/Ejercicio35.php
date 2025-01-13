<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 35</title>
</head>
<body>
    <h3>Decimal a binario</h3>
    <form name="prueba" method="post" action="Ejercicio35.php">
        <label for="valores">Número</label><br>
        <input type="text" id="numero" name="num"><br><br>
        <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Un programa que permita convertir un número decimal (entero) a binario.
    $num = intval($_POST["num"]);
    $binario = "";
    $residuo = 0;
    while ($num > 0) {
        $residuo = $num % 2;
        $binario = $residuo . $binario;
        $num = intval($num / 2);
    }
    echo "El número en binario es: $binario";
    ?>
    
</body>
</html>