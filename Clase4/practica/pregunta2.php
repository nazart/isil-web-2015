<!DOCTYPE html>
<html>
    <head>
        <title>
            Practica 1: pregunta 2
        </title>
    </head>
    <body>
        <h1>Pregunta </h1>
        <h3>Escribir un programa que devuelva número de centrar de tres números. </h3>
        <?php
        $numero = array(rand(1, 100), rand(1, 100), rand(1, 100));
        echo "Los numeros son :" . implode(', ', $numero) . '<br>';
        sort($numero);
        echo "Los numeros ordenados son :" . implode(', ', $numero) . '<br>';
        echo "EL numero central es: " . $numero[1];
        ?>   
    </body>
</html>
