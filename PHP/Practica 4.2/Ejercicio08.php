<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08</title>
</head>
<body>
    <p>Calculo número primo</p>
    <form method="post" action="Ejercicio08.php">
        <label for="num">Introduce el número</label>
        <input type="number" name="num" required><br>
        <input type="submit" name="calcular" value="Enviar"><br><br>
    </form>
    <?php
    function esPrimo($num) {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }

    function primosAnteriores($num) {
        $primos = [];
        for ($i = 2; $i < $num; $i++) {
            if (esPrimo($i)) {
                $primos[] = $i;
            }
        }
        return $primos;
    }

    if (isset($_POST["calcular"])) {
        $num = intval($_POST["num"]);
        if (esPrimo($num)) {
            echo "El número $num es primo.<br>";
        } else {
            echo "El número $num NO es primo.<br>";
        }
        $primos = primosAnteriores($num);
        if (!empty($primos)) {
            echo "Los números primos anteriores a $num son: " . implode(", ", $primos);
        } else {
            echo "No hay números primos anteriores a $num.";
        }
    }
    ?>
</body>
</html>