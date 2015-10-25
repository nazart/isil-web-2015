<?php
require_once realpath(__DIR__ . '/app/entity/EntityAlumno.php');
$entityAlumno = new EntityAlumno();
if (isset($_GET['id']) && $_GET['id'] != '') {
    $entityAlumno->indentify($_GET['id']);
    $id = $entityAlumno->getId();
    $nombre = $entityAlumno->getNombre();
    $apellidos = $entityAlumno->getApellidos();
    $fechaNacimiento = $entityAlumno->getFechaNacimiento();
    $correo = $entityAlumno->getCorreo();
}
if (isset($_POST) && !empty($_POST)) {
    $entityAlumno->indentify($_POST['id']);
    $entityAlumno->setNombre($_POST['nombre']);
    $entityAlumno->setApellidos($_POST['apellidos']);
    $entityAlumno->setFechaNacimiento($_POST['fechaNacimiento']);
    $entityAlumno->setCorreo($_POST['correo']);
    $entityAlumno->save();
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Editar de Alumnos</title>
    </head>
    <body>
<?php require_once realpath(__DIR__ . '/view/formAlumno.php'); ?>
    </body>


</html>