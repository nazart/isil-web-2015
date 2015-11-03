<h4>Actualice sus datos</h4>
<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$marca = new entity_marca(); 

$marca->getMarca($_GET['id']);
$nombre = $marca->getNombre();
$flag_act =$marca->getFlag_act();
$fec_reg =$marca->getFec_reg();
$fec_ulti_actu =$marca->getFec_ulti_actu();

include_once realpath(__DIR__.'/form.php');

if(isset($_POST)){    
    $marca->setNombre($_POST['nombre']);
    $marca->setFlag_act($_POST['flag_act']);
    $marca->setFec_reg($_POST['fec_reg']);
    $marca->setFec_ulti_actu($_POST['fec_ulti_actu']);    
    $marca->editar();
    
}
?>



