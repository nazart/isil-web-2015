<h1> Funciones definidas por el usuarios </h1>
<pre>
    <?php

    function sumar($valor1, $valor2) {
        return ($valor1 + $valor2);
    }

    echo 'la suma 1+3 es: ' . sumar(1, 3);
    ?>
</pre>
<h1> Funciones Recursivas </h1>
<pre>
    
    <?php

    function recursividad($a) {
        if ($a < 20) {
            echo "$a\n";
            recursividad($a + 1);
        }
    }

    $a = 0;
    recursividad($a);
    ?>

</pre>
<h1> Funciones variables </h1>
<pre>
<?php

function funcion1() {
    echo "En funcion1()<br />\n";
}

function funcion2($arg = '') {
    echo "En funcion2(); el argumento era '$arg'.<br />\n";
}

// Esta es una función de envoltura alrededor de echo
function hacerecho($cadena) {
    echo $cadena;
}

$func = 'funcion1';
$func();        // Esto llama a funcion1()
funcion1();        // Esto llama a funcion1()

$func = 'funcion2';
$func('prueba');  // Esto llama a funcion2()
funcion2('prueba');  // Esto llama a funcion2()

$func = 'hacerecho';
$func('prueba');  // Esto llama a hacerecho()
hacerecho('prueba');  // Esto llama a hacerecho()
?>
</pre>
<h1> Funciones Internas </h1>
<?php //phpinfo(); ?>
<?php echo get_include_path(); ?><br>
<?php print_r(get_included_files()); ?><br>
<?php print_r(substr('Nazart Jara Huaman', '0', '6')); ?>
<h1> Funciones anonimas </h1>
<p>
    Las funciones anónimas, también conocidas como clausuras (closures), permiten la creación de funciones 
    que no tienen un nombre especificado. Son más útiles como valor de los parámetros de llamadas de retorno, 
    pero tienen muchos otros usos.
</p>
<pre>
<?php
$saludo = function($nombre)
{
    printf("Hola %s\n", $nombre);
};


$saludo('Mundo');
$saludo('PHP');
?>
</pre>