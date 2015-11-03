<?php
include_once realpath(__DIR__.'/../entity/marca.php');
  
       $nomb = $_POST['nombre'];
       $fecreg = $_POST['reg'];
       $fecact = $_POST['act'];
       $flag = $_POST['selCombo'];
       
$entity = new Marca();
$nuevo= $entity->Nuevo($nom, $fecreg, $fecact, $flag);





