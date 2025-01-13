<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio22.php">
    <label for="altura">Introduce n </label>
    <input type="text" id="n" name="n"><br>
    <input type="submit" name="enviar" value="Calcular"><br><br>
    </form>
    
    <?php
    // Escribe un programa que calcule el factorial de n.

    $n = floatval($_POST["n"]);
    if ($n < 0) {
        echo "El factorial no está definido para números negativos.";
    } else {
        $resultado = 1;
        for ($i = 1; $i <= $n; $i++) {
            $resultado *= $i;
        }
        echo "El factorial de $n es $resultado.";
    }
   
    ?>
</body>
</html>