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
        <td>
            <?php echo $index['marca_nombre']; ?>
        </td>
        <td>
            <?php echo $index['marca_flag_activo']; ?>
        </td>
        <td>
            <?php echo $index['marca_fecha_registro']; ?>
        </td>
        <td>
            <a href="update.php?id=<?php echo $index['marca_id']; ?>">Editar</a>
        </td>
         <td>
             <input type="button" name="Eliminar" value="Eliminar" />             
        </td>
    </tr>
<?php
} ?>
</table>