<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 27</title>
</head>
<body>
    <h3>Calculadora de áreas</h3>
    <h4>Área de trapecio, triángulo, cuadrado, rectángulo o círculo</h4>
    <br>
    <li>Área de trapecio: 1</li>
    <li>Área de triángulo: 2</li>
    <li>Área de cuadrado: 3</li>
    <li>Área de rectángulo: 4</li>
    <li>Área de círculo: 5</li>
    <br>
    <form name="prueba" method="post" action="Ejercicio27.php">
        <label for="num1">Introduce un número </label>
        <input type="text" id="num1" name="num1"><br>
        <label for="num2">Introduce un número </label>
        <input type="text" id="num2" name="num2"><br>
        <label for="op">Introduce una opción </label>
        <input type="text" id="op" name="op"><br>
        <input type="submit" name="calcular" value="Calcular"><br><br>
    <?php
    //Elaborar un programa que permita calcular diferentes tipos de áreas: trapecio, triángulo,
    //cuadrado, rectángulo o círculo, en caso contrario indicar que no es una figura geométrica válida. Se le
    //indicará al programa el área a calcular.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);
        $op = $_POST["op"];

        switch ($op) {
            case "1":
                echo "El área del trapecio es: " . (($num1 + $num2) / 2);
                break;
            case "2":
                echo "El área del triángulo es: " . ($num1 * $num2 / 2);
                break;
            case "3":
                echo "El área del cuadrado es: " . ($num1 * $num1);
                break;
            case "4":
                echo "El área del rectángulo es: " . ($num1 * $num2);
                break;
            case "5":
                echo "El área del círculo es: " . (3.1416 * $num1 * $num1);
                break;
            default:
                echo "Figura geométrica no válida";
        }
    }
    ?>
    
</body>
</html>