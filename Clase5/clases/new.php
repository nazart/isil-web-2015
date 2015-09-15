<?php require_once realpath(__DIR__ . './clases/entity.php'); ?>
<?php require_once realpath(__DIR__ . './clases/persona.php'); ?>
<?php require_once realpath(__DIR__ . './clases/auto.php'); ?>
<?php
if (isset($_POST) and !empty($_POST)) {
    $persona = new Persona();
    $persona->setPropertie('nombre', $_POST['nombre']);
    $persona->setPropertie('apellido', $_POST['apellidos']);
    $persona->setPropertie('direccion', $_POST['direccion']);
    $persona->nuevoUsuario();
    header('Location: http://localhost:8082/class/index.php ');
}else{
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Primera Practica</title>
    </head>
    <body>
        <form method="POST" action="">
            <label>Nombre</label><input type="text" name="nombre" value="<?php  ?>">
            <label>Apellidos</label><input type="text" name="apellidos">
            <label>Direccion</label><input type="text" name="direccion">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>