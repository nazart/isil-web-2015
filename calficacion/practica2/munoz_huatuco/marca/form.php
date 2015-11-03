<form>
    <label>Nombre</label><input type="text" name="nombre" value="<?php echo isset($nombre)?$nombre:''; ?>"><br>    
            <label>Marca_Flag</label><input type="checkbox" name="flag">
            <label>Marca_inactivo</label><input type="checkbox" name="flag"><br>
            <label>Fecha registro</label><input type="datetime" name="fechareg"value="<?php echo isset($fecha)?$fecha:''; ?>">
            <label>Fecha registro</label><input type="datetime" name="fechareg"value="<?php echo isset($fecha2)?$fecha2:''; ?>">
            <button type="submit">Crear</button>
            
            
</form>