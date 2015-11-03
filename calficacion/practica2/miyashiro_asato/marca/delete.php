<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$marca = new entity_marca();
$id = $_GET['id'];
$marca->eliminar($id);
$nombre = $marca->getNombre();