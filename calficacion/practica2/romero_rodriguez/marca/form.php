<form name="insertar" method="post">
  
    <label>Nombre Marca </label><input type="text" name="nombre" value="<?php echo isset($nombre)?$nombre:''; ?>"><br><br>
    <label>Flag Activo </label><input type="checkbox" name="flag" value="">
            <label>Flag inactivo </label><input type="checkbox" name="flag"><br><br>
            <label>Fecha Registro </label><input type="text" name="fechareg" value="<?php echo isset($fechareg)?$fechareg:''; ?>"><br><br>
            <label>Ultima Fecha Registro </label><input type="text" name="ufechareg" value="<?php echo isset($Ufechareg)?$Ufechareg:''; ?>"><br><br>
            <button type="submit">Enviar</button>
</form>
