<?php require_once realpath(__DIR__.'./clases/entity.php'); ?>
<?php require_once realpath(__DIR__.'./clases/persona.php'); ?>
<?php require_once realpath(__DIR__.'./clases/auto.php'); ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Primera Practica</title>
    </head>
    <body>
        <?php
        $atributos = array('nombre'=>'javier','apellido'=>'contreras',);
        $persona = new Persona($atributos);
        echo $persona->getApellido().'<p>';
        echo $persona->getNombre().'<p>';
        Persona::ESTADO_REGISTRADO;
        ?>
    </body>
</html>