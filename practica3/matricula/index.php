<?php
require_once realpath(__DIR__ . '/../app/entity/EntityMatricula.php');
require_once realpath(__DIR__ . '/../app/entity/EntityCurso.php');
$entityMatricula = new EntityMatricula();
$codigoAlumno='';
$cursos = array();
/*Buscar Alumno*/
if (isset($_GET['codigoAlumno']) && $_GET['codigoAlumno'] != '') {
    $datosAlumno = $entityMatricula->buscarAlumno($_GET['codigoAlumno']);
    $idAlumno = $datosAlumno['alumno_id'];
    $codigoAlumno = $datosAlumno['alumno_codigo'];
    $nombreAlumno = $datosAlumno['alumno_nombre'];
    $apellidoAlumno = $datosAlumno['alumno_apellidos'];
}
/*Reistrar los cursos*/
if (isset($_POST) && !empty($_POST)) {
    $entityMatricula->setAlumno($_POST['idAlumno']);
    $entityMatricula->setCursos($_POST['cursos']);
    $entityMatricula->save();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administrador de Cursos</title>
    </head>
    <body>
        <?php $cursos = EntityCurso::getAllCurso(); ?>
        <?php require_once realpath(__DIR__ . '/view/searchAlumno.php'); ?>
    </body>
</html>