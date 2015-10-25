<?php
require_once realpath(__DIR__ . '/../app/entity/EntityCurso.php');
$entityCurso = new EntityCurso();
if(isset($_GET['id']) && $_GET['id']=!''){
    $entityCurso->indentify($_GET['id']);
    $id = $entityCurso->getId();
    $nombre = $entityCurso->getNombre();
    $credito = $entityCurso->getCredito();
    $activo = $entityCurso->getActivo();
}

if (isset($_POST) && !empty($_POST)) {
    $entityCurso->indentify($_POST['id']);
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