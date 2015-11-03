<form method="POST">
    <input type="text" name="nombre" value="<?php echo isset($nombre)?$nombre:''; ?>">
    <input type="text" name="estado" value="<?php echo isset($estado)?$estado:''; ?>">
    <button type="submit" > Enviar</button>
</form>
