<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>
<body>
    <form method="post" action="Ejercicio01.php">
        <label for="post">Introduce primer número</label>
        <input type="number" id="num1" name="num1"><br>
        <label for="post">Introduce segundo número</label>
        <input type="number" id="num2" name="num2"><br>
        <input type="submit" name="calcular" value="Enviar"><br><br>
    </form>
    <?php
        function sumar($a, $b){
            return ($a + $b);
        }
        if (isset($_POST["calcular"]) && !empty($_POST["num1"]) && !empty($_POST["num2"])){
            $total = sumar($_POST["num1"], $_POST["num2"]);
            echo $total;
        }
    ?>
</body>
</html>