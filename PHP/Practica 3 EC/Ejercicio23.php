<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>
<body>
    <h3>Conversior grados Farenheit (F) a Celsius (C)</h3>
    <form name="prueba" method="post" action="Ejercicio23.php">
    <label for="grados">Introduce grados Farenheit </label>
    <input type="text" id="f" name="f"><br>
    <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Escriba un programa que lea temperaturas expresadas en grados Fahrenheit y las convierta a
    //grados Celsius mostrándola. El programa finalizará cuando lea un valor de temperatura igual a 999. La
    //conversión de grados Farenheit (F) a Celsius (C) está dada por C = 5/9*(F − 32).

    $f = floatval($_POST["f"]);
    
    if ( $f != 999 ) {
        $c = 5/6 * ($f - 32);
        echo " $c º Celsius";
    }
    else  {
        echo "Fin del programa";
    }
    ?>
</body>
</html>