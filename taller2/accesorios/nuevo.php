<?php 
if(!empty($_POST)){
    require_once realpath(__DIR__.'/../app/entity/EntityAccesorios.php');    
    $accesorio = new EntityAccesorios();
    $accesorio->setEstado($_POST['estado']);
    $accesorio->setNombre($_POST['nombre']);
    $accesorio->save();
    header('Location:../accesorios');
}  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Nuevo Accesorio</title>
    </head>
    <body>
        <?php require_once realpath(__DIR__.'/../form/formAccesorio.php'); ?>
    </body>
</html>
