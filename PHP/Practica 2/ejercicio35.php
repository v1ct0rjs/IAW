<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 35</title>
</head>
<body>
    <?php
        $nota1 = 7; 
        $nota2 = 8; 
        $nota3 = 6; 

        $notaFinal = ($nota1 * 0.20) + ($nota2 * 0.50) + ($nota3 * 0.30);

        echo "Notas por trimestre: $nota1, $nota2, $nota3<br>";
        echo "La nota final es: " . round($notaFinal, 2);
    ?>
</body>
</html>