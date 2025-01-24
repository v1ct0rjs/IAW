<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04</title>
</head>
<body>
    <form method="post" action="Ejercicio04.php">
        <label for="post">Introduce un número</label>
        <input type="text" id="num" name="num"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        function cuadrado($numero){
            return sqrt($numero);
        }
        if (!empty($_POST["num"])){
            echo cuadrado(intval($_POST["num"]));
        }
        
    ?>
</body>
</html>