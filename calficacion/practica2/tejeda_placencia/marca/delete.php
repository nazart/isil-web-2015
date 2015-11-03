<?php

include_once realpath(__DIR__.'/../entity/marca.php');

$marca = new entity_marca();
$marca->eliminar($_GET['id']);

header("Location: index.php");