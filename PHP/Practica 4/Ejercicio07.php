<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 07</title>
</head>
<body>
    <form method="post" action="Ejercicio07.php">
        <label for="post">Cadena</label>
        <input type="text" id="var" name="var"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        function convertirCadena($var){
            if (ctype_upper($var)){
                return strtolower($var);
            }
            elseif (ctype_lower($var)) {
                return strtoupper($var);
            }
        }
        echo convertirCadena($_POST["var"]);
    ?>
</body>
</html>