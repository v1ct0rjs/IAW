<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo " Hemos entrado<br><br>";
        $conn = mysqli_connect('10.0.20.37', $_POST['user'], $_POST['pass']);
        if (!$conn) 
        {
            die('No pudo conectarse: '. mysqli_connect_error());
        }
        else
        {
            echo 'Conectado';
        }
    ?> 
</body>
</html>