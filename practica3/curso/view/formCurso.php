<form method="POST">
    <?php if(isset($id) && $id!=''){ ?>
    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
    <?php } ?>
    
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo isset($nombre)?$nombre:'' ?>">
    </div>
    
    <div>
        <label>Credito</label>
        <input type="text" name="credito" id="credito" value="<?php echo isset($credito)?$credito:'' ?>">
    </div>
    
    
    <div>
        <label>Activo</label>
        <?php if ($activo == EntityCurso::CURSO_INACTIVO) { ?>
        <input type="checkbox" name="activo" value="1">
        <?php } else { ?>
            <input type="checkbox" name="activo" checked="checked" value="1">
        <?php } ?>
    </div>
    
    <div>
        <input type="submit" value="registrar"></div>
</form>