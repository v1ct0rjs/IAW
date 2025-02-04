<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php
        $caracteres_permitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longitud = rand(1, 100);
        $cadena_generada = substr(str_shuffle($caracteres_permitidos), 0, $longitud);
        echo $cadena_generada;
        echo '<br><br>La longitud de esta cadena es ', strlen($cadena_generada);
    ?>  
</body>
</html>