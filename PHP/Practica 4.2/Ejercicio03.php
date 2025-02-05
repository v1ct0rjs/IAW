<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<body>
    <form method="post" action="Ejercicio03.php">
        <label for="post">Introduzca número</label>
        <input type="number" id="num" name="num"><br>
        <label for="post">Introduzca exponente</label>
        <input type="number" id="exp" name="exp"><br>
        <input type="submit" name="calcular" value="Calcular">
        <br><br>
    </form>
    <?php
        function exponente($n, $e){
            return ($n ** $e);
        }
        if (!empty($_POST["num"] && !empty($_POST["exp"]))){
            echo exponente($_POST["num"], $_POST["exp"]);
        }
    ?>
</body>
</html>