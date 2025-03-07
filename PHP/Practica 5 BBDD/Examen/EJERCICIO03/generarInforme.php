<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe</title>
</head>
<body>
    <?php
    function PorcentajeAsistencia($asistencias, $totalClases){
        return (($asistencias * 100) / $totalClases);
    }

    function determinarEstadoAlumno($porcentajeAsistencia){
        if ($porcentajeAsistencia < 70){
            return "Riesgo";
        }
        else if ((70 < $porcentajeAsistencia) && ($porcentajeAsistencia < 90)){
            return "Normal";
        }
        else {
            return "Excelente";
        }
    }

    function obtenerColorEstado($estado,&$color){
        if ($estado == "Riesgo"){
            $color = "rojo";
        }
        else if ($estado == "Normal"){
            $color = "amarillo";
        }
        else {
            $color = "verde";
        }
    }

    echo $_POST["nombre"];
    echo $_POST["asistencias"];
    echo $_POST["faltas"];
    echo $_POST["justificadas"];
    
    $totalClases = 1370;

    $asistencias = PorcentajeAsistencia($_POST["asistencias"], $totalClases);
    echo $asistencias;

    $estado = determinarEstadoAlumno($asistencias);
    echo $estado;

    $color = obtenerColorEstado($estado);
    echo $color;
    ?>
</body>
</html>