<!DOCTYPE html>
<html>
    <head>
        <title>
            Practica1 | pregunta 1
        </title>
    </head>
    <body>
        <h1>Pregunta 1</h1>
        <h3>Escribir un programa que visualice todos los múltiplos de 3 del  número 1 al 3000.</h3>
        <?php
        foreach (range(1, 3000) as $index) {
            echo $index % 3 == 0 ? $index . ' &nbsp; ' : '';
        }
        ?>        
    </body>
</html>
