<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 34</title>
</head>
<body>
    <h3>Número al revés</h3>
    <form name="prueba" method="post" action="Ejercicio34.php">
        <label for="valores">Número</label><br>
        <input type="text" id="numero" name="num"><br><br>
        <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Un programa que permita leer un número entero de 4 cifras e imprimirlo al revés
    $num = intval($_POST["num"]);
    $num1 = $num % 10;
    $num2 = ($num / 10) % 10;
    $num3 = ($num / 100) % 10;
    $num4 = ($num / 1000) % 10;

    echo "El número al revés es: $num1$num2$num3$num4";
    ?>
    
</body>
</html>