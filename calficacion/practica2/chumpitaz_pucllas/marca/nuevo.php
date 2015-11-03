<?php

include_once realpath(__DIR__.'/../entity/marca.php');
include_once realpath(__DIR__.'/form.php');

if(isset($_POST) && !empty($_POST)) {
$nom=$_POST['nombre'];
$est=isset($_POST['estado'])?$_POST['estado']:0;
$entity=new entity_marca();
$entity->nuevo($nom, $est);
//print_r($_POST);
}
