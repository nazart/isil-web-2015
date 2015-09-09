<!--
Una excepción puede ser lanzada ("thrown"), y atrapada ("catched") dentro de PHP. 
El código puede estar dentro de un bloque try para facilitar la captura de excepciones potenciales. 
Cada bloque try debe tener al menos un bloque catch o finally correspondiente. 
-->
<h1>Lanzar una excepcion</h1>
<pre>
<?php
function inverso($x) {
    if (!$x) {
        throw new Exception('División por cero.');
    }
    return 1/$x;
}
//echo inverso(0) . "\n";

try {
    echo inverso(5) . "\n";
    echo inverso(0) . "\n";
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
  //  echo 'trace: ',  $e->getTraceAsString(), "\n";
  //  echo 'file: ',  $e->getFile(), "\n";
  //  echo 'code: ',  $e->getCode(), "\n";
  //  echo 'trace: ',  print_r($e->getTrace()), "\n";
}

// Continuar la ejecución
echo 'Hola Mundo'."\n";
?>

</pre>
<h1>Lanzar una excepcion</h1>
<pre>
<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('División por cero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
} finally {
    echo "Primer finally"."\n";
}

try {
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
} finally {
    echo "Segundo finally"."\n";
}
// Continuar ejecución
echo 'Hola Mundo'."\n";
?>
</pre>