<form method="POST">
    <select id="idAsistencia" name="idAsistencia" 
            onchange="window.location = ('registro_asistencia.php?id=' + document.getElementById('idAsistencia').value)">
        <option value="">Seleccione una asistencia</option>
        <?php foreach ($asistencias as $index): ?>
            <option <?php echo $index['asistencia_id']==$idAsistenciaSelected?'selected':'' ?> value="<?php echo $index['asistencia_id']; ?>"><?php echo $index['asistencia_nombre'] . ' - ' . $index['asistencia_fecha'] ?></option>
        <?php endforeach; ?>
    </select>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Asistencia</th>
        </tr>
        <?php foreach ($allAlumnos as $index) { ?>
            <tr>
                <td><?php echo $index['alumno_nombre'] ?></td>
                <td><?php echo $index['alumno_apellidos'] ?></td>
                <td><?php echo $index['alumno_correo'] ?></td>
                <td><input type="checkbox" <?php if(in_array($index['alumno_id'], $listaAlumnosAsistencia)){echo 'checked';} ?> name="idAlumno[]" value="<?php echo $index['alumno_id'] ?>"></td>
            </tr>
        <?php } ?>
    </table>
    <input type="submit" value="Registrar Asistencia"> 
</form>