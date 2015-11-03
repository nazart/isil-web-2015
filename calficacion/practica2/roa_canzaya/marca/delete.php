
<?php
include 'conection/db.php';
$obj = new db();

$codigo = $_GET["cod"];

$obj->Eliminar($codigo);

header("location:index.php");
?>