<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<body>
    <form name="prueba" method="post" action="Ejercicio03.php">
        <label for="opcion">Introduce número</label>
        <input type="text" id="num" name="num"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        function decAint($numero){
            return intval($numero);
        }
        echo decAint($_POST["num"]);
    ?>
</body>
</html>