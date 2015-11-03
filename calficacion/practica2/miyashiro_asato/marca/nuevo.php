<?php

include_once realpath(__DIR__.'/../entity/marca.php');
$entity = new entity_marca();
//$datos = $entity->listar();
//print_r($datos);

if(isset($_POST['btnGuardar']))
{
	$marca_nombre = $_POST['marca_nombre'];
	$entity->nuevo($marca_nombre);
}
?>

<html>
	 <div>
	    <form method="post">
	    <table align="center">
		    <tr>
			    <td><input type="text" name="marca_nombre" placeholder="Nombre de marca" required /></td>
		    </tr>
		    <tr>
			    <td><button type="submit" name="btnGuardar"><strong>GUARDAR</strong></button></td>
		    </tr>
	    </table>
	    </form>
	</div>
</html>