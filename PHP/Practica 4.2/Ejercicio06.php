<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
</head>
<body>
    <p>Calculo salario</p>
    <form method="post" action="Ejercicio06.php">
        <label for="post">Turno Mañana</label>
        <input type="radio" name="op" value="0"><br>
        <label for="post">Turno Noche</label>
        <input type="radio" name="op" value="1"><br>
        <label for="post">¿Es Festivo?</label>
        <input type="checkbox" name="festivo"><br>
        <input type="submit" name="calcular" value="Enviar"><br><br>
    </form>
    <?php
    // Los empleados de una fábrica trabajan en dos turnos, Diurno y Nocturno. Se desea
    // calcular el jornal diario de acuerdo a con las siguientes reglas:
    // 7. La tarifa de las horas diurnas es de 10 €
    // 8. La tarifa de las horas nocturnas es de 13,5 €
    // 9. En caso de ser festivo, la tarifa se incrementa en un 10% en caso de turno diurno
    // y en un 15% para el nocturno.
    function salario($op, $ck){
        switch($op){
            case 0:
                if ($ck){
                    return (8 * 10) + (8 * 10 * 0.1);
                }
                else {
                    return (8 * 10);
                }
            case 1:
                if ($ck){
                    return (8 * 13.5) + (8 * 13.5 * 0.15);
                }
                else {
                    return (8 * 13.5);
                }
        }
    }
    if (isset($_POST["calcular"])){
        $total = salario($_POST["op"], $_POST["festivo"]);
        echo $total;
    }
    ?>
    
</body>
</html>