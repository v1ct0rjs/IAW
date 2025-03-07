<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="Divisor" method="post" action="index.php">
        <label for="min">Min:</label>
        <input type="number" id="min" name="min" required><br><br>

        <label for="max">Max:</label>
        <input type="number" id="max" name="max" required><br><br>

        <label for="max">Divisor:</label>
        <input type="number" id="div" name="div" required><br><br>

        <input type="submit" value="Calcular">
    </form>
    <?php
        function encontrarDiv($min, $max, $div){
            for ($i = $min; $i <= $max; $i++) {
                for ($j = 1; $j <= $i; $j) {
                    if ($i % $div == 0){
                        return $i;
                    }
                }
            }
        }
        if (isset($_POST["Calcular"])) {
            $min = $_POST["min"];
            $max = $_POST["max"];
            $div = $_POST["div"];
        }
        if (($min < $max) && ($div != 0)){
            encontrarDiv($min, $max, $div);
        } else {
            echo "Error al introducir parametros";
        }
    ?>
    
</body>
</html>