<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 28</title>
</head>
<body>
    <h3>Comparar el area de dos triangulos</h3>
    
    <form name="prueba" method="post" action="Ejercicio28.php">
        <h3>Primer triángulo</h3>
        <label>Base: <input type="text" name="base1"></label><br>
        <label>Altura: <input type="text" name="altura1"></label><br>

        <h3>Segundo triángulo</h3>
        <label>Base: <input type="text" name="base2"></label><br>
        <label>Altura: <input type="text" name="altura2"></label><br>
        <br>
        
        <input type="submit" value="Calcular">
    <?php
    //Pide los datos (base y altura) de dos triángulos y determina cuál de ellos tiene mayor área
    //(llámalos primero y segundo).
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $t1b = floatval($_POST["base1"]);
        $t1a = floatval($_POST["altura2"]);
        $t2b = floatval($_POST["base2"]);
        $t2a = floatval($_POST["altura2"]);

        $area1 = ($t1b * $t1a) / 2;
        $area2 = ($t2b * $t2a) / 2;
        if ( $area1 > $area2 ) {
            echo "El primer triángulo tiene mayor área";
        } else if ( $area1 < $area2 ) {
            echo "El segundo triángulo tiene mayor área";
        } else {
            echo "Ambos triángulos tienen la misma área";
        }
    }
    ?>
    
</body>
</html>