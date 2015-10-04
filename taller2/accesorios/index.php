<!DOCTYPE html>
<html>
    <head>
        <title>Lista Accesorio</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Registro de Accesorios</h1>
        <hr>
        <a href="nuevo.php">Nuevo Accesorio</a>
        <?php
        require_once realpath(__DIR__ . '/../app/entity/EntityAccesorios.php');
        $listAccesorios = EntityAccesorios::getAllAccesorio();
        ?>
        <hr>
        <table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
            </thead>
        <?php foreach ($listAccesorios as $index): ?>
            <tr>
                <td><?php echo $index['accesorio_nombre'] ?></td>
                <td><?php echo $index['accesorio_flag_activo']==1?'activo':'desactivo' ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $index['accesorio_id']; ?>">Editar</a> |
                    <a href="eliminar.php?id=<?php echo $index['accesorio_id']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
    </body>
</html>

