<?php

include_once realpath(__DIR__.'/../entity/marca.php');
include_once realpath(__DIR__.'/form.php');

$marca = new entity_marca();
$id=$_GET['id'];
$marca->eliminar($id);



