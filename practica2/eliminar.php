<?php require_once realpath(__DIR__.'/app/entity/EntityAlumno.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administrador de Alumnos</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha Nacimiento</th>
                <th>Correo</th>
                <th>Accion</th>
            </tr>
        
        <?php foreach(EntityAlumno::getAllAlumno() as $index){ ?>
            <tr>
                <td><?php echo $index['alumno_nombre'] ?></td>
                <td><?php echo $index['alumno_apellidos'] ?></td>
                <td><?php echo $index['alumno_fecha'] ?></td>
                <td><?php echo $index['alumno_correo'] ?></td>
                <td><a href="editar.php">Editar</a> |  <a href="agregarNota.php">Agregar Nota</a> | <a href="eliminar.php">Eliminar</a></td>
            </tr>
        <?php } ?>
            </table>
    </body>


</html>