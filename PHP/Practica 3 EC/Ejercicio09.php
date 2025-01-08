<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
</head>

<body>
    <form name=”prueba” method=”post” action=”Ejercicio09.php”>
    <input type=”number” name=”Numero”/>
    <input type=”submit” name=”enviar”/>
</form>
    <?php
        $numero = $_POST["Numero"];
        $var = 1;
        
        while ($var <= 10){
            $resultado = $var * $numero;
            echo "Tabla de multiplicar del numero", $numero;
            echo $resultado, "<br>";
            $var ++;
        } 
    ?>
</body>
</html>