
<html>
    <body>
        
        <p><a href="form.php">NUEVO</a></p> 
        
        <table border>

          
<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$entity = new Marca();
$datos = $entity->ConsultarMarca(); ?>
            <tr>
                <td>CODIGO</td> 
                <td>NOMBRE</td> 
                <td>F.REGISTRO</td> 
                <td>F.ACTUALIZACION</td> 
                <td>ACTIVO</td> 
                <td>ACCION</td> 
                
                
            </tr>         
            


<?php  foreach ($datos as $value) {?>
            <tr>  
    <td><?php echo $value['marca_id']; ?> </td> 
    <td> <?php echo $value['marca_nombre'];?> </td> 
    <td>  <?php echo $value['marca_fecha_registro'];?> </td> 
    <td>  <?php echo $value['marca_fecha_ultima_actualizacion'];?> </td> 
    <td>  <?php echo $value['marca_flag_activo'];?></td> 
    <td>
        <a href="update.php">actualizar</a> 
        <a href="delete.php">eliminar</a>  
        
    </td>
<?php } ?>

        </tr> 
        </table>
</body>
</html>



