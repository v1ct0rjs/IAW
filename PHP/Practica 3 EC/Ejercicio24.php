<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
<body>
    <h3>Implementa una sentencia switch que escriba un mensaje en cada caso dado</h3><br>
    <li>Escribe 1: Opcion 1</li>
    <li>Escribe 2: Opcion 2</li>
    <li>Escribe 3: Opcion 3</li>
    <li>Escribe 4: Opcion 4</li>
    <br>
    <form name="prueba" method="post" action="Ejercicio24.php">
        <label for="opcion">Introduce opcion </label>
        <input type="text" id="op" name="op"><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
    <?php
    //Implementa una sentencia switch que escriba un mensaje en cada caso dado (por ejemplo, días
    //de la semana). Inclúyela en un bucle de prueba for. Utiliza un break tras cada caso y pruébalo. Elimina un
    //break y vea qué ocurre. 

    $op = $_POST["op"];
    switch ($op) {
        case "1":
            echo "Opcion 1";
            break;
        case "2":
            echo "Opcion 2";
            break;
        case "3":
            echo "Opcion 3";
            break;
        case "4":
            echo "Opcion 4";
            break;
        default:
            echo "Operación no válida";
    }
    ?>
</body>
</html>