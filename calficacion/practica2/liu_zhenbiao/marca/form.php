
<!DOCTYPE html>
<html>
    <head>
        <title>Practica 2</title>
    </head>
    <body>
        <form method="POST" action="">
            <input type ="hidden" name="id" value ="<?php echo isset($id)?$id:''; ?>">
            <label>Marca</label><input type="text" name="nombre_marca" value="<?php echo isset($nombre)?$nombre:''; ?>">
            <label>Estado</label><input type="checkbox" name="flag_activo" value = "yes">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

