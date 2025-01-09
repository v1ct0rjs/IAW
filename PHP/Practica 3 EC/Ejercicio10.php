<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
        $var = 1;
        $resultado = 1;
        while ($var <= 20){
            $resultado = $var * $resultado;
            $var ++;
        } 
        echo "Multiplica los 20 primero números naturales <br>";
        echo $resultado;
    ?>
</body>
</html>