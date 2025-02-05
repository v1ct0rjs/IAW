<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <form method="post" action="Ejercicio17.php">
        <label for="post">1º Número</label>
        <input type="number" id="var1" name="var1"><br>
        <label for="post">2º Número</label>
        <input type="number" id="var2" name="var2"><br>
        <label for="post">3º Número</label>
        <input type="number" id="var3" name="var3"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
        if (isset($_POST["enviar"]) && !empty($_POST["var1"]) && !empty($_POST["var2"]) && !empty($_POST["var3"])) {
            $numeros = array($_POST["var1"], $_POST["var2"], $_POST["var3"]);
            sort($numeros);
            echo "El número más pequeño es: " . $numeros[0] . "<br>";
            echo "El número más grande es: " . $numeros[2] . "<br>";
        }
    ?>
</body>
</html>