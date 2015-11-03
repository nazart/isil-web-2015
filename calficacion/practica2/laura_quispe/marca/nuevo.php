<?php include_once realpath(__DIR__.'/../entity/marca.php'); ?>
<?php
if (isset($_POST) and !empty($_POST)) {
    
    $marca = new entity_marca(); 
    $est =1;
    $marca->nuevo($_POST['nombre'],$est);
    header('Location: localhost:8082/isil-web-2015/Clase7/crud/marca/');
}
?>

<!DOCTYPE html>


<form method="POST" action="">
    <input type="text" name="nombre" value="<?php ?>">
    <br>
    <button type="submit">Enviar</button>
</form>