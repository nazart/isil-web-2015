<a href="crear.php">Nuevo Curso</a>
<table>
    <tr>
        <th>Nombre</th>
        <th>Credito</th>
        <th>Activo</th>
        <th>Accion</th>
    </tr>

        <?php foreach ($allCurso as $index) { ?>
        <tr>
            <td><?php echo $index['curso_nombre'] ?></td>
            <td><?php echo $index['curso_credito'] ?></td>
            <td><?php echo $index['curso_flag_activo'] ?></td>
            <td><a href="editar.php?id=<?php echo $index['curso_id'] ?>">Editar</a>  | <a href="eliminar.php">Eliminar</a></td>
        </tr>
    <?php } ?>
</table>