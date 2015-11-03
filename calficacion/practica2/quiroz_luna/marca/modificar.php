<?php

	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT id, nombre, FROM marca WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Marcas</title>
	</head>
	<body>
		
		<center><h1>Modificar Marca</h1></center>
		
		<form name="modificar_marca" method="POST" action="mod_marca.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Marca</b></td>
					<td width="30"><input type="text" name="id" size="25" value="<?php echo $row['id']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Password</b></td>
					<td><input type="password" name="nombre" size="25" value="<?php echo $row['nombre']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	

