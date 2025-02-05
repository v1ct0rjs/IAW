<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<body>
    <form method="post" action="Ejercicio02.php">
        <label for="post">Introduzca radio</label>
        <input type="number" id="radio" name="radio"><br>
        <input type="submit" name="calcular" value="Calcular">
        <br><br>
    </form>
    <?php
        function radio($r){
            return (3.14 * $r ** 2);
        }
        if (isset($_POST["calcular"]) && !empty($_POST["radio"])){
            echo radio($_POST["radio"]);
        }
    ?>
</body>
</html>