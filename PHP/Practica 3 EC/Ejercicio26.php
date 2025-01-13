<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>
<body>
    <h3>Calculadora</h3>
    <h4>Suma, Resta, Multiplicación, División</h4>
    <br>
    <br>
    <li>Suma: 1</li>
    <li>Resta: 2</li>
    <li>Multiplicación: 3</li>
    <li>División: 4</li>
    <br>
    <form name="prueba" method="post" action="Ejercicio26.php">
        <label for="num1">Introduce un número </label>
        <input type="text" id="num1" name="num1"><br>
        <label for="num2">Introduce un número </label>
        <input type="text" id="num2" name="num2"><br>
        <label for="op">Introduce una opción </label>
        <input type="text" id="op" name="op"><br>
        <input type="submit" name="calcular" value="Calcular"><br><br>
    </form>
    <?php
    //Un programa simula el comportamiento de una calculadora con las 4 operaciones básicas:
    //suma, resta, multiplicación y división. El programa debe leer dos números y una operación
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //La línea `if ($_SERVER["REQUEST_METHOD"] == "POST")` verifica si el formulario ha sido enviado usando el método POST. 
                                                //Sirve para asegurarse de que el código dentro del bloque `if` solo se ejecute cuando el formulario se envía, y no cuando la página se carga inicialmente.
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);
        $op = $_POST["op"];

        switch ($op) {
            case "1":
                echo "La suma de $num1 y $num2 es: " . ($num1 + $num2);
                break;
            case "2":
                echo "La resta de $num1 y $num2 es: " . ($num1 - $num2);
                break;
            case "3":
                echo "La multiplicación de $num1 y $num2 es: " . ($num1 * $num2);
                break;
            case "4":
                if ($num2 == 0) {
                    echo "No se puede dividir por 0";
                    break;
                } else {
                    echo "La división de $num1 y $num2 es: " . ($num1 / $num2);
                    break;
                }
            default:
                echo "Operación no válida";
        }
    }
    ?>
</body>
</html>