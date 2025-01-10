<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio19.php">
    <label for="altura">Introduce la edad del usuario </label>
    <input type="text" id="a" name="a"><br>
    <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Según la edad de una persona, lo clasificaremos en las siguientes etapas: Infancia (menor de
    //catorce años), Juventud (entre catorce y 26 años), Adultez (entre 27 y 59 años) y personas mayores (igual o
    //superiores a 60 años). 
    $a = floatval($_POST["a"]);
    
    if ( $a <= 0 ){
        echo "";
    }
    else {
        if ( 0 < $a && $a <= 14 ) {
            echo "Infancia";
        }
        if ( 14 < $a && $a <= 26 ) {
            echo "Juventud";
        }
        if ( 26 < $a && $a <= 59 ) {
            echo "Adulto";
        }
        if ( 59 < $a ) {
            echo "Anciano";
        }
    }
    ?>
</body>
</html>