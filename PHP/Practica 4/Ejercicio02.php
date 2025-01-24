<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 02</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio02.php">
        <label for="opcion">Introduce número 1 </label>
        <input type="text" id="min" name="min"><br>
        <label for="opcion">Introduce número 2 </label>
        <input type="text" id="min" name="min"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        function int_aleatorio($min, $max){
            echo "El número aleatorio es ". rand($min, $max);
        }
        $min = intval($_POST["min"]);
        $max = intval($_POST["max"]);
        int_aleatorio($min, $max);

    ?>
</body>
</html>



