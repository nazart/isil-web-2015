<?php include_once realpath(__DIR__.'/../entity/marca.php'); ?>


<?php
if (isset($_POST) and !empty($_POST)) {
    
    $marca = new entity_marca(); 
    $marca->editar($_POST['id'],$_POST['nombre']);
    header('Location: localhost:8082/isil-web-2015/Clase7/crud/marca/index.php ');
}
?>

<form method="POST" action="">

    <input type="text" name="id" value="<?php echo isset($id)?$id:''; ?>"><br><br><br>
    <input type="text" name="nombre" value="<?php echo isset($nombre)?$nombre:''; ?>">
    <br>
    <button type="submit">Enviar</button>
</form>