<?php
require_once realpath(__DIR__.'/../app/entity/EntityAccesorios.php');    
$accesorio = new EntityAccesorios();
if(!empty($_POST)){
    $accesorio->indentify($_POST['id']);
    $accesorio->setEstado($_POST['estado']);
    $accesorio->setNombre($_POST['nombre']);
    $accesorio->save();
    header('Location:../accesorios');
}
if(!empty($_GET)){
    $accesorio->indentify($_GET['id']);
    $id = $accesorio->getId();
    $estado = $accesorio->getEstado();
    $nombre = $accesorio->getNombre();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Editar Accesorio</title>
    </head>
    <body>
        <?php require_once realpath(__DIR__.'/../form/formAccesorio.php'); ?>
    </body>
</html>
