<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$entity = new entity_marca();
$datos = $entity->listar();
print_r($datos);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Carro</title>
    </head>
    <body>
        
    <center><h1>Carro</h1></center>
    <a href="nuevo.php">Nuevo Carro</a>
    <table border="1" width="80%">
        <thead>
            <tr>
                <td><b>fecha</b></td>
                <td><b>nombre</b></td>
               
            </tr>
        </thead> 
        <tbody>
            <?php foreach ($datos as $row){?>
            <tr>
                <td><?php echo $row["marca_fecha_registro"] ?></td>
                <td><?php echo $row["marca_nombre"] ?></td>
                
            </tr>
            <?php }?>
        </tbody>
    </table>
    </body>
</html>



