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
        const DTO = 0.15;
        
        echo "precio del producto: " . $precio = 12.5;
        echo "<br>descuento: " . $descuento = ($precio*DTO);
        echo "<br>precio final: " . $precioFinal = $precio - $descuento . "€";
        /**
         * Podría prescindir de $precio, $descuento, $precioFinal
         * echo "precio del producto: 12.5" ;
         * echo "<br>descuento: " . (12.5*DTO);
         * echo "<br>precio final: " . 12.5 - (12.5*DTO) . "€";
         * */  
        
        ?>
        <p>
        Declara una constante que se llame IVA, asignale el 21% de IVA
        crea una variable que se llame precioProducto su valor es 451.5 euros
        muestra por pantalla el iva del producto y el precio final
        </p>
        <p>
        Calcula la velocidad de una automovil que recorre 120KM en 1.5 hora (e=v*t)
        </p>
        <p>
        Dada esta formula  A=πr² calcula el area de un circulo con un radio de 73
        </p>
        <p>
        Muestra esta frase "si el resto de la división de 73 entre 2 es 0 entonces es par sino es impar y el resultado es: (realiza la operación)" , 
        </p>       
        
    </body>
</html>
