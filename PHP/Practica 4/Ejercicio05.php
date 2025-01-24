<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>
    <form method="post" action="Ejercicio05.php">
        <label for="post">Valor variable</label>
        <input type="text" id="var" name="var"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        function var_vacia($var){
            if (empty($var)){
                return "Está vacia";
            }
            else {return "Contiene un valor";}
        }
        echo var_vacia($_POST["var"]);
    ?>
</body>
</html>