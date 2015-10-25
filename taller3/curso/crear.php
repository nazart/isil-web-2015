<?php
require_once realpath(__DIR__ . '/../app/entity/EntityCurso.php');
$activo = 1;
if (isset($_POST) && !empty($_POST)) {
    $entityCurso = new EntityCurso();
    $entityCurso->setNombre($_POST['nombre']);
    $entityCurso->setCredito($_POST['credito']);
    $entityCurso->setActivo($_POST['activo']);
    $entityCurso->save();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Editar de Cursos</title>
    </head>
    <body>
<?php require_once realpath(__DIR__ . '/view/formCurso.php'); ?>
    </body>
</html>