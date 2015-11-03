<?php
	require('/../conexion/conexion.php');	
        
	$query="SELECT marca_id, marca_nombre, FROM marca";	
        
	$resultado=$mysqli->query($query);
  	
?>

<html>
	<head>
		<title>Marca</title>
	</head>
	<body>
		
		<center><h1>Marcas</h1></center>
		
		<a href="nueva_marca.php">Nueva marca</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Id</b></td>
					<td><b>Nombre</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php foreach ($datos as $index){
    ?>
    <tr>
        <td>
            <?php echo $index['marca_nombre']; ?>
        </td>
        <td>
            <?php echo $index['marca_flag_activo']; ?>
        </td>
        <td>
            <a href="update.php?id=<?php echo $index['marca_id']; ?>">Editar</a>
        </td>
    </tr>
<?php
} ?>
				</tbody>
			</table>
		</body>
	</html>	
	
