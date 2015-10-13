<?php require_once realpath(__DIR__.'/app/entity/EntityAlumno.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administrador de Alumnos</title>
    </head>
    <body>
        <?php $allAlumnos = EntityAlumno::getAllAlumno(); ?>
        <?php require_once realpath(__DIR__ . '/form/listaAlumno.php'); ?>
    </body>
</html>