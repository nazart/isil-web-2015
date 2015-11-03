<form>
    <input type="text" name="nombre" value="<?php echo isset($nombre)?$nombre:''; ?>">
    <?php if( isset($Estado)&& $Estado == 0){ ?>
    <input type="checkbox" name="Estado" value="1" checked>
    <?php } else { ?>
    <input type="checkbox" name="Estado" value="0" checked>
    <?php } ?>
    <input type="button" name="Grabar" value="Grabar">  
</form>
