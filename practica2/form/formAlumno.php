<form method="POST">
    <?php if(isset($id) && $id!=''){ ?>
    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
    <?php } ?>
    
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo isset($nombre)?$nombre:'' ?>">
    </div>
    
    <div>
        <label>Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" value="<?php echo isset($apellidos)?$apellidos:'' ?>">
    </div>
    
    <div>
        <label>Fechas de Nacimiento</label>
        <input type="text" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo isset($fechaNacimiento)?$fechaNacimiento:'' ?>">
    </div>
    
    <div>
        <label>Correo</label>
        <input type="text" name="correo" id="correo" value="<?php echo isset($correo)?$correo:'' ?>">
    </div>
    
    <div>
        <input type="submit" value="registrar"></div>
</form>