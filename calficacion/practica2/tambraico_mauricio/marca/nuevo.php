<h4>Nueva marca</h4>
<?php include_once realpath(__DIR__.'/form.php');
    
    include_once realpath(__DIR__.'/../entity/marca.php');

    $marca = new entity_marca(); 
    $marca->setNombre($_POST['nombre']);
    $marca->setFlag_act($_POST['flag_act']);
    $marca->setFec_reg($_POST['fec_reg']);
    $marca->setFec_ulti_actu($_POST['fec_ulti_actu']); 
    
    if(isset($_POST)){ 
        $marca->nuevo();
        header('Location: http://localhost:8082/isil-web-2015/Clase7/crud/marca/index.php');
    }
    
    

?>




