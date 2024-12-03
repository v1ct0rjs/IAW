<?php
//datos 1
$nombre1 = "Alice Brown";
$edad1 = 20;
$altura1 = 1.72;
$estadoCivil1 = true; //muestra 1, devuelve true o no muestra nada pero devuelve false
$profesion1 = null; //no mostrará nada pero devuelve null
$otrosDatos1 = ""; //está vacia
//completa los datos de Bob, tiene 32 años, mide 1.80, está casado,la profesión es null
$nombre2 = "Bob Adams";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>

    <body>
        <h1>Datos Personales</h1>
            <?php
            
            // Datos de Alice
            echo "<h2>Datos de <u>$nombre1</u></h2>";
            echo "<p>Su edad es de $edad1 , mide $altura1 metros, es $estadoCivil1 que está casado/a, su profesión es $profesion1, otros datos $otrosDatos1. </p>";
            echo "<p><b>información sobre el tipo de variable y su valor: </b></p><p>";
            /**
             * muestro informacion sobre la variables, con en método var_dump.
             * los metodos nos se pueden embeber entro comillas dobles como si lo hacen la variables
             * var_dump no necesita un echo para mostrar los datos por pantalla
             */
            echo "nombre: ";
            var_dump($nombre1);
            echo " , edad:";
            var_dump($edad1);
            echo " , altura:";
            var_dump($altura1);
            echo " , estado civil:";
            var_dump($estadoCivil1);
            echo " , profesion:";
            var_dump($profesion1);
            echo " , otros datos:";
            var_dump($otrosDatos1);
            echo "</p>";
            // datos de BOB
            echo "<h2>Datos de <u>    </u></h2>";
            echo "<p>Su edad es de    , mide     metros, es     que está casado/a, su profesión es     , otros datos      . </p>";
            echo "<p><b>información sobre el tipo de variable y su valor: </b></p><p>";
            echo "nombre: ";
            
            echo " , edad:";
            
            echo " , altura:";
            
            echo " , estado civil:";
            
            echo " , profesion:";
            
            echo " , otros datos:";
            
            echo "</p>";            

            ?>
    </body>

</html>
