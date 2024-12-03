<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p> 
       Dentro del comentario //variables los identificadores nombre2, nombre3 y nombre4 con sus fechas de nacimiento y asignales los siguientes nombres e inventante las fechas
       Bob Adams, 
       Charlie Davies, 
       Daniel Chapman.
       <br>
       muestra los valores por pantalla como en el ejemplo 1
        </p>
        
        <p>Listado personas<br> 
        -------------------- <br>
        </p>
        <p>
        <?php
        //variables
        $nombre1 = "Alice Brown";
        $fechaNacimiento1 = "01/09/1970";
        
        //fin variables
        
        //dato 1
        echo "<br>";
        echo "01- ";
        echo "Nombre: ";
        echo "<b>";
        echo $nombre1;
        echo "</b>";
        echo ", Fecha Nacimiento: ";
        echo "<i>";
        echo $fechaNacimiento1;
        echo "</i>";
        //dato 2
        echo "<br>";
        echo "02- ";
        echo "Nombre: ";
        echo "<b>";
       
        echo "</b>";
        echo ", Fecha Nacimiento: ";
        echo "<i>";
        
        echo "</i>";
        //dato 3
        echo "<br>";
        echo "03- ";
        echo "Nombre: ";
        echo "<b>";

        echo "</b>";
        echo ", Fecha Nacimiento: ";
        echo "<i>";

        echo "</i>";
        //dato 4
        echo "<br>";
        echo "04- ";
        echo "Nombre: ";
        echo "<b>";

        echo "</b>";
        echo ", Fecha Nacimiento: ";
        echo "<i>";

        echo "</i>";        
        ?>
        </p>
    </body>
</html>
