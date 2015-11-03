<!DOCTYPE html>
<html>
    <head>
        <title>Listado de Alumnos</title>
    </head>
    <body>
        <h1>Listado de alumnos</h1>
        <hr>
        <table>
            <tr>
                <td style="padding: 10px; color: #008200; text-align: center">Apellidos</td>
                <td style="padding: 10px; text-align: center">Nombres</td>
                <td style="padding: 10px; text-align: center">Correos</td>
            </tr>
            <?php foreach($datos as $index):?>
            <tr>
                <td><?php echo $index['nombre'] ?></td>
                <td><?php echo $index['apellidos'] ?></td>
                <td><?php echo $index['email'] ?></td>
            </tr>
            <?php endforeach;?>
        </table>
        <hr>
    </body>
</html>

