<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio09.php">
        <label for="Numero">Introduce un número:</label>
        <input type="number" id="Numero" name="Numero"><br>
        <input type="submit" name="enviar" value="Calcular">
    </form>
    <?php
        $numero = $_POST["Numero"];
        echo "<h3>Tabla de multiplicar del número $numero</h3>";
        for ($var = 1; $var <= 10; $var++) {
            $resultado = $var * $numero;
            echo "$var &times; $numero = $resultado<br>";
        }
    ?>
</body>
</html>
