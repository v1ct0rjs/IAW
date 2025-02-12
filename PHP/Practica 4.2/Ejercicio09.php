<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Calculo factorial</p>
    <form method="post" action="Ejercicio09.php">
        <label for="num">Introduce el número</label>
        <input type="number" name="num" required><br>
        <input type="submit" name="calcular" value="Enviar"><br><br>
    </form>
    <?php
    // Escribe una función que devuelva el factorial de un número N (siendo N un número
    // entero positivo). El factorial de 5 es el resultado de 5*4*3*2*1.
    function factorial($n){
        $total = 1;
        for ($i = $n; $i > 1; $i--) {
            $total *= $i;
        }
        return $total;
    }
    if (isset($_POST["calcular"])){
        echo factorial($_POST["num"]);
    }
    ?>
    
</body>
</html>