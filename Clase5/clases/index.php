<?php require_once realpath(__DIR__.'./clases/entity.php'); ?>
<?php require_once realpath(__DIR__.'./clases/persona.php'); ?>
<?php require_once realpath(__DIR__.'./clases/auto.php'); ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Primera Practica</title>
    </head>
    <body>
        <a href="http://localhost:8082/class/new.php">Registrar Persona</a>
        <a href="http://localhost:8082/class/destruir.php">Limpiar Persona</a>
        <?php $persona = new Persona(); ?>
        <?php $listaPersonas = Persona::listPersona();
        //print_r($listaPersonas);
        ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Direccion</th>
            </tr>
            <?php foreach ($listaPersonas as $personaObject): ?>
            <tr>
                <td><?php echo $personaObject['nombre'] ?></td>
                <td><?php echo $personaObject['apellido'] ?></td>
                <td><?php echo $personaObject['direccion'] ?></td>
                <td><a href="http://localhost:8082/class/new.php?id=<?= $personaObject['id']; ?>">editar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
    </body>
</html>