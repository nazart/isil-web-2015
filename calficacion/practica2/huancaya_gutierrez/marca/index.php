<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$entity = new entity_marca();
$datos = $entity->listar();
?>

<a href="nuevo.php">Nuevo</a>

<br>
<br>
<table>
    
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Estado</th>
        <th>Fecha de Registro</th>
        <th>Acci&oacute;n</th>
    </tr>
    <style>  table { margin:auto;} th,td {padding-left: 15px;} </style>
    </thead>
<?php foreach ($datos as $index){
    ?>
    <tr>
        <center><td>
            <?php echo $index['marca_nombre']; ?>
        </td>
        <td>
            <?php echo $index['marca_flag_activo']; ?>
        </td>
        <td>
            <?php echo $index['marca_fecha_registro']; ?>
        </td>
        <td>
            <center><a href="update.php?id=<?php echo $index['marca_id']; ?>">Editar</a></center>
        </td>
         <td>
             <center><input type="button" name="Borrar" value="Borrar" /></center>            
        </td></center>
    </tr>
<?php
} ?>
</table>