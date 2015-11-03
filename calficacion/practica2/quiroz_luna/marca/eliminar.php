<?php 
	 
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM marca WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar Marca</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Marca Eliminada</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Marca</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>

