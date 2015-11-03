<?php
include_once realpath(__DIR__.'/../entity/marca.php');


$marca = new entity_marca();
$marca->getMarca($_GET['id']);
$nombre = $marca->getNombre();
$estado = $marca->getEstado();

if( isset($_POST) && isset($_POST['nombre']) && isset($_POST['estado']) ){
	$datos = $marca->editar( $_GET['id'],$_POST['nombre'], $_POST['estado']);
	header("Location: index.php");
}

?>

<form method="POST" action="">
	<h3>Ingresar una marca</h3>
    <label>Nombre de marca:</label><br>
    <input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
    <label>Activo: </label>
    <?php 
    	if( $estado == 1 ){
    		$check = "checked";
    	}else{
    		$check = "";
    	}
     ?>
    <input type="checkbox" name="estado" value="<?php echo $estado; ?>" <?php echo $check; ?> /><br><br>
	<input type="submit" name="formSubmit" value="Insertar" />
</form>
