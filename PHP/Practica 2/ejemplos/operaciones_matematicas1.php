<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "suma de 2 + 2: " .  (2 + 2);
        echo "<br>";
        echo "resta de 4 - 8: " .  (4 - 8);
        echo "<br>";
        echo "cociente de 4 / 0.5: " .  4 / 0.5;
        echo "<br>";
        echo "multiplicación de 2.2 * 2: " .  2.2 * 2;
        echo "<br>";
        //resto de la división o módulo
        echo "resto de la división de 2 / 2: " .  2 % 2;
        echo "<br>";
        //uso de paréntesis igual que la mátemáticas
        //primero multiplicaciones y divisiones y luego sumas y restas
        echo "operacion de sumar 30+5 y multiplicarlo por 55.5 el resultado dividido para 2: " .  5.5*(3+5)/2;
        echo "<br>";
        echo "operaciones con signos de 2 - -2: " .  (2 - (-2));
        echo "<br>";
        //algunas operaciones usan funciones
        echo "potencia de 2 al cuadrado: " . pow(2,2);
        echo "<br>";
        echo "número aleatorio entre 1 y 28: " . rand(1,28);
        
        
        ?>
    </body>
</html>
