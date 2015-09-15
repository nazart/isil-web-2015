<?php require_once realpath(__DIR__ . './clases/entity.php'); ?>
<?php require_once realpath(__DIR__ . './clases/persona.php'); ?>
<?php require_once realpath(__DIR__ . './clases/auto.php'); ?>
<?php    $persona = new Persona();
    $persona->destriurEntity(Persona::NOMBRE_ENTITY);
    header('Location: http://localhost:8082/class/index.php ');
?>