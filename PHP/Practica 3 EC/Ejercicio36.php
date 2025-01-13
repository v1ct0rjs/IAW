<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 36</title>
</head>
<body>
    <h3>Calculadora</h3>


    <form name="prueba" method="post" action="Ejercicio36.php">
        <label for="valores">Número 1</label><br>
        <input type="text" id="numero1" name="n1"><br>
        <label for="valores">Número 2</label><br>
        <input type="text" id="numero2" name="n2"><br><br>
        <label for="valores">Operación</label><br>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
            <option value="potencia">Potencia</option>
        </select><br><br>

        <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    <?php
    //Implementar una calculadora en HTML y PHP que, además de sumar, restar, dividir y
    //multiplicar, permita elevar un número a una potencia y que tenga una memoria de resultado, es decir, que
    //pueda guardar el resultado de una suma, hacer otra operación y trabajar con el resultado de esta nueva
    //operación y el resultado guardado previamente.
    $n1 = floatval($_POST["n1"]);
    $n2 = floatval($_POST["n2"]);
    $operacion = $_POST["operacion"];
    $resultado = 0;

    switch ($operacion) {
        case 'suma':
            $resultado = $n1 + $n2;
            break;
        case 'resta':
            $resultado = $n1 - $n2;
            break;
        case 'multiplicacion':
            $resultado = $n1 * $n2;
            break;
        case 'division':
            if ($n2 == 0) {
                echo "No se puede dividir entre cero.";
                exit;
            }
            $resultado = $n1 / $n2;
            break;
        case 'potencia':
            $resultado = pow($n1, $n2);
            break;
    }

    echo "El resultado de la operación es: $resultado";


    ?>
    
</body>
</html>