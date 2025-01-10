<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio18.php">
    <label for="altura">Introduce un número </label>
    <input type="text" id="a" name="a"><br>
    <input type="submit" name="enviar" value="Calcular"><br>
    </form>
    <?php
    //Escribir un programa que lea un número entero e imprima todos los números impares menores que él.
    $a = floatval($_POST["a"]);
   
    if ( $a == 0 ) {
        echo "0";
    }
    else {
        if ( $a % 2 == 0 ){
            $a = $a - 1;
            echo $a. "<br>";
            while ( $a > 0 ){
                $a = $a - 2;
                if ( $a < 0){
                    break;
                }
                echo $a. "<br>";
            }
        }
        else{
            while ( $a > 0 ){
                $a = $a - 2;
                if ( $a < 0){
                    break;
                }
                echo $a. "<br>";
            }
        }
    }
    ?>
</body>
</html>