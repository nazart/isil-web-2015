<?php
include_once realpath(__DIR__.'/../entity/marca.php');


$marca = new entity_marca();
$marca->getMarca($_GET['id']);
$nombre = $marca->getNombre();
$estado = $marca->getEstado();

include_once realpath(__DIR__.'/form.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

