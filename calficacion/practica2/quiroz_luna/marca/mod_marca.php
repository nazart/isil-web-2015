<?php 	
	require('conexion.php');	
	$id=$_POST['id'];
	$usuario=$_POST['nombre'];
	
	$query="UPDATE usuarios SET id='$id', nombre='$nombre', email='$email' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar Marca</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Marca Modificada</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Marca</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				