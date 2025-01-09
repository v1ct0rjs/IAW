
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio13.php">
        <label for="Numero">Introduce un cantidad en euros:</label>
        <input type="text" id="Euros" name="Euros"><br>
        <input type="submit" name="enviar" value="Calcular">
    </form>
    <?php
        //13. Escribir un programa que convierta de euros a dólares. Recibirá un número decimal
        //correspondiente a la cantidad en euros y contestará con la cantidad correspondiente en dólares.
        //$euros = (float)$_POST["Euros"];
        $euros = floatval($_POST["Euros"]);
        $dolares = $euros * 1.03;
        echo "<br>$dolares $<br>";
    ?>
</body>
</html>