<a href="crear.php">Nuevo Alumno</a>
<table>
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Fecha Nacimiento</th>
        <th>Correo</th>
        <th>Accion</th>
    </tr>
        <?php foreach ($allAlumnos as $index) { ?>
        <tr>
            <td><?php echo $index['alumno_codigo'] ?></td>
            <td><?php echo $index['alumno_nombre'] ?></td>
            <td><?php echo $index['alumno_apellidos'] ?></td>
            <td><?php echo $index['alumno_fecha'] ?></td>
            <td><?php echo $index['alumno_correo'] ?></td>
            <td><a href="editar.php?id=<?php echo $index['alumno_id'] ?>">Editar</a> |  <a href="agregarNota.php?id=<?php echo $index['alumno_id'] ?>">Agregar Nota</a> | <a href="eliminar.php">Eliminar</a></td>
        </tr>
    <?php } ?>
</table>