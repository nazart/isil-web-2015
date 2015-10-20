<?php
require_once realpath(__DIR__ . '/app/entity/EntityAlumno.php');


if (isset($_POST) && !empty($_POST)) {
    $entityAlumno = new EntityAlumno();
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