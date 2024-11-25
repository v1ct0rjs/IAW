<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre PHP</title>
</head>
<body>
    <h1>Preguntas y Respuestas sobre PHP</h1>
    <ol>
        <li>
            <strong>¿Dónde se ejecuta el código PHP: en el servidor o en el cliente?</strong>
            <p>
                <?php 
                echo "En el servidor. Esto significa que el código PHP se procesa en el servidor web, y el resultado generado (generalmente HTML) se envía al navegador del cliente."; 
                ?>
            </p>
        </li>
        <li>
            <strong>¿Qué tipo de contenido puede generar PHP?</strong>
            <p>
                <?php 
                echo "Con PHP se puede trabajar con cookies, procesar formularios, generar contenidos dinámicos (acceso a bases de datos), enviar e-mails…"; 
                ?>
            </p>
        </li>
        <li>
            <strong>¿Cuál es la diferencia entre PHP y JavaScript en términos de dónde se ejecutan?</strong>
            <p>
                <?php 
                echo "JavaScript se ejecuta en el <em>cliente</em>. Esto significa que el navegador web del usuario descarga el código JavaScript y lo ejecuta directamente."; 
                ?>
            </p>
        </li>
    </ol>
</body>
</html>

