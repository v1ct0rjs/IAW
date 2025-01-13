<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
<body>
    <h3>Leer un número de un dígito y escribir su correspondiente en letra según el alfabeto castellano</h3>
    <form name="prueba" method="post" action="Ejercicio25.php">
        <label for="numero">Introduce un número </label>
        <input type="text" id="num" name="num"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    <?php
    //Leer un número de un dígito y escribir su correspondiente en letra según el alfabeto castellano.
    //Leer una letra que corresponda a un número romano (carácter) y encontrar su valor en números
    //decimales, en caso contrario, decir que no es un número romano válido. 

    $num = $_POST["num"];
    switch ($num) {
        case "1":
            echo "Uno";
            break;
        case "2":
            echo "Dos";
            break;
        case "3":
            echo "Tres";
            break;
        case "4":
            echo "Cuatro";
            break;
        case "5":
            echo "Cinco";
            break;
        case "6":
            echo "Seis";
            break;
        case "7":
            echo "Siete";
            break;
        case "8":
            echo "Ocho";
            break;
        case "9":
            echo "Nueve";
            break;
        case "0":
            echo "Cero";
            break;
        case "X":
            echo "Diez";
            break;
        case "L":
            echo "Cincuenta";
            break;
        case "C":
            echo "Cien";
            break;
        case "D":
            echo "Quinientos";
            break;
        case "M":
            echo "Mil";
            break;
        case "V":
            echo "Cinco";
            break;
        case "I":
            echo "Uno";
            break;
        default:
            echo "Operación no válida";
    }

    ?>


    
</body>
</html>