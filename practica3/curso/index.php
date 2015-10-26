<?php require_once realpath(__DIR__.'/../app/entity/EntityCurso.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administrador de Cursos</title>
    </head>
    <body>
        
        <?php $allCurso = EntityCurso::getAllCurso(); ?>
        <?php require_once realpath(__DIR__ . '/view/listaCurso.php'); ?>
    </body>
</html>