<?php 
	include_once realpath(__DIR__.'/../entity/marca.php'); 
	$entity = new entity_marca();

	if( isset($_POST) && isset($_POST['nombre']) && isset($_POST['estado']) ){
		$datos = $entity->nuevo($_POST['nombre'], $_POST['estado']);
	}
	
?>

<form method="POST" action="">
	<h3>Ingresar una marca</h3>
    <label>Nombre de marca:</label><br>
    <input type="text" name="nombre" value=""><br>
    <label>Activo: </label>
    <input type="checkbox" name="estado" value="1" /><br><br>
	<input type="submit" name="formSubmit" value="Insertar" />
</form>
