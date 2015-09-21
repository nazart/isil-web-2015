<?php
require_once realpath(__DIR__.'/config.php') ;
require_once realpath(__DIR__.'/model/marca.php');
$color = marca::all(' ORDER BY marca_nombre');
print_r($color);
?>
