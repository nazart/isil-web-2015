<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$marca = new entity_marca();
$marca->getMarca($_GET['id']);
include_once realpath(__DIR__.'/form.php');