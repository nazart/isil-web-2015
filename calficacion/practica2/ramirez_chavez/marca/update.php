<?php
include_once realpath(__DIR__.'/../entity/marca.php');

$marca = new entity_marca();
$marca->getMarca($_GET['id']);
$nombre = $marca->getNombre();

include_once realpath(__DIR__.'/form.php');

editar($_GET['id'],$_GET['nombre'],$_GET['estado']);
?>

<button>
<img src="http://iesfacil.com/wp-content/uploads/2014/01/ManualMoveImg09-BotonCrearNuevo.png" width="120" height="35" alt="">
</button>

