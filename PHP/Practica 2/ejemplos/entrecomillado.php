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
        <p>muestra nombre3 con comillas dobles y nombre4 con comillas simples</p>
        <p>Listado personas<br> 
        -------------------- <br>
        </p>
        
        <?php
        $nombre1 = "Alice Brown";
        $nombre2 = "Bob Adams";
        $nombre3 = "Charlie Davies";
        $nombre4 = "Daniel Chapman";
        //las comillas simples permiten el embebido de las variables, las simples no.
        echo "01- nombre: $nombre1 <br>";
        echo '02- nombre: ';
        echo $nombre2;
        echo '<br>';
        ?>
    </body>
</html>
