<?php ?>
<form method="GET">
    <label>Ingrese el codigo del ALumno <input type="text" value="<?php echo $codigoAlumno ?>" name="codigoAlumno"></label>
</form>
<?php if ($codigoAlumno != '') { ?>
    <form action="" method="POST">
        <input hidden="alumno" name="idAlumno" value="<?php echo $idAlumno; ?>">
        <table>
            <tr>
                <td>Codigo Alumno: </td><td><?php echo $codigoAlumno; ?></td>
            </tr>
            <tr>
                <td>Nombre Alumno: </td><td><?php echo $nombreAlumno; ?></td>
            </tr>
            <tr>
                <td>Apellido Alumno: </td><td><?php echo $apellidoAlumno; ?></td>
            </tr>
        </table>
        <p></p>
        <table>
            <tr>
                <td>Listado de  Curso</td>
                <td>&nbsp;</td>
            </tr>
            <?php foreach ($cursos as $index): ?>
                <tr>
                    <td><?php echo $index['curso_nombre'] ?></td>
                    <td><input type="checkbox" name="cursos[]" value="<?php echo $index['curso_id'] ?>"></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <input type="submit" value="Registrar Cursos">
    </form>
<?php } ?>