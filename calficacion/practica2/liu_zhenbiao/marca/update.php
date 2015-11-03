<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$marca = new entity_marca();
$marca->getMarca($_GET['id']);
$nombre = $marca->getNombre();
include_once realpath(__DIR__.'/form.php');


if (isset($_POST) and !empty($_POST)) {
    $marca_nueva = new entity_marca();
    $marca_nueva_id = $_POST['id'];
    $marca_nueva_nom = $_POST['nombre_marca'];

    if(isset($_POST['flag_activo']) && $_POST['flag_activo'] == 'yes'){
        $estado = 1;
    }
    else {
        $estado = 0;
    }
    
    $marca_nueva->nuevo($marca_nueva_id, $marca_nueva_nom, $estado);
    header('Location: http://localhost:8082/isil-web-2015/Clase7/crud/marca/index.php');
}else{
    
}
?>
