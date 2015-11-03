<?php 
	
	require('/../conexion/conexion.php');
	
	$id=$_POST['marca_id'];
	$nombre=$_POST['marca_nombre'];
	
	
	$query="INSERT INTO marca (marca_id, marca_nombre) VALUES ('$id','$nombre')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar Marca</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>marca Guardada</h1>
				<?php }else{ ?>
				<h1>Error al Guardar marca</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	
