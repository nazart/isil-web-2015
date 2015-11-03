<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT marca_fecha_registro, marca_nombre FROM marca WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
    <head>
        <title>carro</title>
    </head>
    <body>
    <center><h1>actualirar carro</h1></center>
    <form name="update.php" method="GET" action=".php">
        <table width='50%'>
            <tr>
            <input type="hidden" name='id' value="<?php echo $id; ?>"/>
            <td width='20'><b>marca</b></td>
            <td width='30'><input type='text' name="marca" size="25" value="<?php echo $row['marca'];?>"/></td>
            </tr>
            <tr>
            <td><b>color</b></td>
            <td><input type='text' name="color" size="25" value="<?php echo $row['color'];?>"/></td>
            </tr>
            <tr>
            
            <tr>
                <td colspan="2"><center><input type="submit" name="guardar" value="Guardar"/></center></td>
            </tr>
        </table>
    </form>
    </body>
</html>

