<?php include_once realpath(__DIR__.'/form.php'); ?>

<?php
if (isset($_POST) and !empty($_POST)) {
    
    require_once '../entity/marca.php';
       
    $marca = new entity_marca();
    $marca_nom = $_POST['nombre_marca'];
    
    if(isset($_POST['flag_activo']) && $_POST['flag_activo'] == 'yes'){
        $estado = 1;
    }
    else {
        $estado = 0;
    }
    
    $marca->nuevo($marca_nom, $estado);
    header('Location: http://localhost:8082/isil-web-2015/Clase7/crud/marca/index.php');
 
}

else{
    
}
?>

