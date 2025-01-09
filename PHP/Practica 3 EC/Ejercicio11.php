<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <?php
        $var = 1;
        $resultado = 1;
        while ($var <= 100) {
            $resultado =+ ($var ** 2);// $resultado = $resultado + ($var ** 2);
            $var ++; 
            echo $resultado, "<br>";
        }
        echo "El resultado es $resultado";
    ?>
</body>
</html>