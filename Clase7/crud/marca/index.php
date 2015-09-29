<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$entity = new entity_marca();
$datos = $entity->listar();
print_r($datos);
?>



