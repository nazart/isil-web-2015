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
        <h3>Escribir un programa que dibuje las tablas de multiplicar del 1 al 12, Incluir css para diferenciar el color de cada tabla. </h3>
        <?php
        foreach (range(1, 12) as $index1) {
            $html = '<table class="color'.$index1.'">';
            foreach (range(1, 12) as $index2) {
                $html .='<tr>';
                $html .='<td>';
                $html .=$index1 . ' x' . $index2;
                $html .='</td>';
                $html .='<td>=';
                $html .=$index1 * $index2;
                $html .='</td>';
                $html .='</tr>';
            }
            $html .= '</table>';
            echo $html;
        }
        ?> 
    </body>
</html>
