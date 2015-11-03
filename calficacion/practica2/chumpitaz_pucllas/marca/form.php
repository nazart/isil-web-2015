
<form method="POST" action="">
    <input type="text" name="nombre" value="<?php echo isset($nombre)?$nombre:''; ?>">
    <?php if(isset($estado) && $estado==1){ ?>
    <input type="checkbox" name="estado" checked value="1">
    <?php }else{ ?>
    <input type="checkbox" name="estado"  value="1">
    <?php }?>
    
    <button type="submit" name="agregar">Aceptar</button>
</form>
