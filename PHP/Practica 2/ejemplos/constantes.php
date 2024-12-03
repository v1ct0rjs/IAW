<?php
define("IVA", 0.21);
const DTO = 0.15;
/**
 * crea aqui las siguientes constantes con 'define':
 * SERVER, DB, USER, PASS, sus valores serán "localhost", "users", "root", "root".
 */
/**
 * Crea un constantes con 'const':
 * OK, KO, ERROR, con los siguientes valores "acceso correcto", "acceso incorrecto", "error en la introducción de datos"
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <p>
           (constante con define) muestra el iva : <?php echo IVA ?> <br>
           (constante con const) muestra el descuento : <?php echo DTO ?> <br>
           (constante reservada) muestra el máximo número entero permitido en esta versión: <?php echo PHP_INT_MAX ?> <br>
           (constante mágica) muestra número de línea de este fichero: <?php echo __LINE__ ?> <br>
        </p>
        
        <p> Constantes reservadas: 
            <a href="http://php.net/manual/es/reserved.constants.php">constantes predifinidas de PHP del nucleo</a>
        </p>
        <p> constantes mágicas: 
            <a href="http://php.net/manual/es/language.constants.predefined.php">constantes predefinidas mágicas</a>
        </p>
        <p>¿Entonces const o define?, mejor const <br>
            <a href="https://stackoverflow.com/questions/2447791/define-vs-const">const vs define</a> 
        </p>
        <?php 
        //muestra los datos de las constantes define que has creado
        
        //muestra los datos con la constante const que has creado
                
        //muestra con una constante reservada la versión de PHP instalada 
        
        // muestra con una constante mágica el directorio en el que se encuentra este archivo
        
        
        ?>
        <p>
            
            
        </p>
    </body>
</html>