<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio12.php">
        <label for="Numero">Introduce un número:</label>
        <input type="number" id="Numero" name="Numero"><br>
        <input type="submit" name="enviar" value="Calcular">
    </form>
    <?php
        $numero = $_POST["Numero"];
        $resultado = 0;
        for ($var = 1; $var <= 100; $var++) {
            $resultado += ($var + $numero);
        }
        echo "la suma de los 100 número siguientes de $numero es $resultado";
    ?>
</body>
</html>