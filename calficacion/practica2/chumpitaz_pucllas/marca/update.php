<?php
include_once realpath(__DIR__.'/../entity/marca.php');

$marca = new entity_marca();
$marca->getMarca($_GET['id']);
$nombre = $marca->getNombre();
$estado=$marca->getEstado();

include_once realpath(__DIR__.'/form.php');

$id=$_GET['id'];
$marca->editar($id,$nombre,$estado);