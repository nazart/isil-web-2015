<?php

function crear_piramide ($filas) {
    $cadena = null;
    for ($i = 1; $i <= $filas; $i++) {
        for ($h = $i; $h <= $i; $h++) {
            $cadena .= "*";
        }
        echo $cadena."<br />";
    }
}
crear_piramide (9);

?>