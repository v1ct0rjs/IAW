<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
</head>
<body>
    <form method="post" action="Ejercicio06.php">
        <label for="post">Valor variable</label>
        <input type="text" id="var" name="var"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        function check_var($var){
            if (isset($var) && is_null($var)){
                return "Está definida y no es nula";
            }
            else {return "No está definida";}
        }
        echo check_var($_POST["var"]);
    ?>
</body>
</html>