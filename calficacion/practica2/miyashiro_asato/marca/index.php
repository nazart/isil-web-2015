<?php
include_once realpath(__DIR__.'/../entity/marca.php');
$entity = new entity_marca();
$datos = $entity->listar();
?>
<a href="nuevo.php">Nuevo</a>
<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Estado</th>
        <th>Acci&oacute;n</th>
    </tr>
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
            <a href="update.php?id=<?php echo $index['marca_id']; ?>">Editar</a>
            <a href="delete.php?id=<?php echo $index['marca_id']; ?>">Eliminar</a>
        </td>
    </tr>
<?php
} ?>
</table>