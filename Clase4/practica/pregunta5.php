<!DOCTYPE html>
<html>
    <head>
        <title>
            Practica : pregunta 
        </title>
        <link href="css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Pregunta </h1>
        <h3>
            Crear un programa que dibuje un árbol con asteriscos, por ejemplo si defino como número máximo el 6 debe de imprimir 6 filas formando el árbol:
            Para HTML el espacio en blanco se define como &nbsp;.
            Incluir Css para darle color al árbol
        </h3>
        <?php
        $numMax = rand(1, 10);
        $i = 0;
        $arrayClass = array('verde', 'rojo');
        foreach (range(1, $numMax) as $index) {
            $valor = $index + $i;
            $asteriscos = '';
            foreach ((range(1, $valor)) as $index2) {
                $asteriscos .= '*';
            }
            $numEspaciosBlanco = ($numMax - $i);
            $espaciosBlanco = '';
            foreach ((range(1, $numEspaciosBlanco)) as $index2) {
                $espaciosBlanco .='&nbsp; ';
            }
            echo '<span class=' . $arrayClass[$i % 2] . '>' . $espaciosBlanco . $asteriscos . $espaciosBlanco . '</span>';
            echo '<p>';
            $i++;
        }
        ?>        
    </body>
</html>
