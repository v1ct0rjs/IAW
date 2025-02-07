<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 07</title>
</head>
<body>
    <p>Calculo numero primo</p>
    <form method="post" action="Ejercicio07.php">
        <label for="post">Introduce el número</label>
        <input type="number" name="num"><br>
        <input type="submit" name="calcular" value="Enviar"><br><br>
    </form>
    <?php
    // Crea una aplicación que nos pida un número y, mediante un procedimiento, nos
    // indique si es este es primo o no.
    function primo($num){
        $contadorPrimo = 0;
        for($contador = 1; $contador<=$num; $contador++){
            if($num % $contador == 0){
                $contadorPrimo = $contadorPrimo + 1;
            }
        }
        if($num == 1 or $contadorPrimo == 2){
            echo "El numero ".$num." es primo";
        }
        else{
            echo "El numero ".$num." NO es primo";
        }
    }
    if (isset($_POST["calcular"])){
        primo($_POST["num"]);
    }
    ?>
</body>
</html>