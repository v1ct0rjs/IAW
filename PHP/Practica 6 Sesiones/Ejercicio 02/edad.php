<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Variables</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_POST['edad'])){
            $_SESSION['edad'] = $_POST['edad'];
            echo "Edad guardada en la sesión";
        }
    ?> 
    <button onclick="window.location.href='mostrar_var.php'">Mostrar</button>
</body>
</html>