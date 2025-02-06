<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04</title>
</head>
<body>
    <p>Operaciones</p>
    <form method="post" action="Ejercicio04.php">
        <label for="post">Suma</label>
        <input type="radio" id="sum" name="op" value="0"><br>
        <label for="post">Resta</label>
        <input type="radio" id="res" name="op" value="1"><br>
        <label for="post">Multiplicación</label>
        <input type="radio" id="mul" name="op" value="2"><br>
        <label for="post">División</label>
        <input type="radio" id="div" name="op" value="3"><br><br>
        <label for="post">Introduce primer número</label>
        <input type="number" id="num1" name="num1"><br>
        <label for="post">Introduce segundo número</label>
        <input type="number" id="num2" name="num2"><br>
        <input type="submit" name="calcular" value="Enviar"><br><br>
    </form>
    <?php
    //Crea un programa que reciba dos números y un código de operación y permita
    //calcular las operaciones básicas (suma, resta, multiplicación y división) entre estos
    //dos números.
    function operaciones($a, $b, $op){
        switch($op){
            case 0:
                return ($a + $b);
            case 1:
                return ($a - $b);
            case 2:
                return ($a * $b);
            case 3:
                if ($b != 0){
                    return ($a / $b);
                }
                else {
                    return "No se puede dividir entre 0";
                }
        }
    }
    $total = operaciones($_POST["num1"], $_POST["num2"], $_POST["op"]);
    echo $total;
    ?>
    
</body>
</html>