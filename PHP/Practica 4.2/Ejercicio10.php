<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Calculo factorial entre dos números</p>
    <form method="post" action="Ejercicio10.php">
        <label for="num">Introduce el número min</label>
        <input type="number" name="min" required><br>
        <label for="num">Introduce el número max</label>
        <input type="number" name="max" required><br>
        <input type="submit" name="calcular" value="Enviar"><br><br>
    </form>
    <?php
    // Haz un procedimiento que reciba dos números y escriba en pantalla el factorial de
    // cada número comprendido entre los dos pedidos.
    function factorial($min, $max){
        for ($i = ($max - 1); $i > $min; $i--){
            $total = 1;
            for ($j = $i; $j > 1; $j--) {
                $total *= $j;
            }
            echo $i." su faactorial es ".$total;
        }
    }
    if (isset($_POST["calcular"])){
         factorial($_POST["nin"], $_POST["max"]);
    }
    ?>
    
</body>
</html>