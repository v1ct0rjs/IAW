<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>
    <p>Conversor monedas</p>
    <form method="post" action="Ejercicio05.php">
        <label for="post">Libras</label>
        <input type="radio" name="op" value="0"><br>
        <label for="post">Dolar</label>
        <input type="radio" name="op" value="1"><br>
        <label for="post">Yen</label>
        <input type="radio" name="op" value="2"><br>
        <label for="post">Introduce Euros</label>
        <input type="number" name="euro"><br>
        <input type="submit" name="calcular" value="Enviar"><br><br>
    </form>
    <?php
    //Escribe una función llamada conversionMoneda (…) que permita convertir una
    //cantidad de dinero dada en dólares, libras o yenes a euros. Estas son las
    //equivalencias aproximadas:
    //• 1 libra=1,22 euros
    //• 1 dolar=0,75 euros
    //• 1 yen=0.009 euro
    function conversor($a, $op){
        switch($op){
            case 0:
                return ($a * 1.22);
            case 1:
                return ($a * 0.75);
            case 2:
                return ($a * 0.009);
        }
    }
    if (isset($_POST["calcular"])){
        $total = conversor($_POST["euro"], $_POST["op"]);
        echo $total;
    }
    ?>
    
</body>
</html>