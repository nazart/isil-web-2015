 <label><h1>Actualizar Marca</h1></label><br> 
<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$marca = new entity_marca();
$marca->getMarca($_GET['id']);
$nombre = $marca->getNombre();
$fecha=$marca->getFecha();
$fecha2=$marca->getFecha2();


include_once realpath(__DIR__.'/form.php'); ?>
