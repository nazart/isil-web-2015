<?php
include_once realpath(__DIR__.'/../entity/marca.php');

$marca = new entity_marca();
//$marca->getMarca($_GET['idd']);
$nombre = $marca->getNombre();

eliminar($_GET['idd']);
?>

