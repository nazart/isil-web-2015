<?php include_once realpath(__DIR__.'/form.php');?>

<?php include_once realpath(__DIR__.'/../entity/marca.php');
$marca = new entity_marca();
$nombre=$_POST['nombre'];
$activo=$_POST['estado'];
$marca->nuevo($nombre, $activo);
header('Location:http://localhost:8082/isil-web-2015/Clase7/crud/marca/index.php');