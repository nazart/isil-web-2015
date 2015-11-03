<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$marca = new entity_marca();
if($marca->eliminar($_GET['id'])){
    header('Location: http://localhost:8082/isil-web-2015/Clase7/crud/marca/index.php');
}
else{
    print_r("No se elimino registro. Intente de nuevo.");
}
    
?>