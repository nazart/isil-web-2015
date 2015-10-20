<?php require_once realpath(__DIR__.'/app/entity/EntityAlumno.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administrador de Alumnos</title>
    </head>
    <body>
        
        <p>
            <a href="registro_asistencia.php">Registro Asistencia</a>
        </p>
        <?php $allAlumnos = EntityAlumno::getAllAlumno(); ?>
        <?php require_once realpath(__DIR__ . '/form/listaAlumno.php'); ?>
    </body>
</html>