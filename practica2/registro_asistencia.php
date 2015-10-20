<?php
require_once realpath(__DIR__ . '/app/entity/EntityAsistencia.php');
$asistencia = new EntityAsistencia();
$listaAlumnosAsistencia = array();/*lista de alumnos que asistieron*/
$idAsistenciaSelected=''; /*asistencia seleccionada*/
if(isset($_GET['id']) && (int)$_GET['id'] > 0){
    $asistencia->indentify($_GET['id']);
    $idAsistenciaSelected = $asistencia->getId();
    $listaAlumnos = $asistencia->listarAlumnos();
    foreach ($listaAlumnos as $index){
        if($index['alumno_asistencia_estado']==1)
        $listaAlumnosAsistencia[]=$index['alumno_id'];    
    }
}
if(isset($_POST) && !empty($_POST)){
    $alumnos = $_POST['idAlumno'];
    $idAsistencia = $_POST['idAsistencia'];
    $asistencia->indentify($idAsistencia);
    $asistencia->registrarAsistencia($alumnos);
    header('Location: registro_asistencia.php?id='.$idAsistencia);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Asistencia</title>
    </head>
    <body>
    <?php 
    $allAlumnos = EntityAlumno::getAllAlumno();
    $asistencias = EntityAsistencia::getAllAsistencias();
    //print_r($asistencias);exit;
    require_once realpath(__DIR__ . '/view/listaAsistencia.php'); ?>
    </body>
</html>