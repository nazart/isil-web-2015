<form method="POST">
    
    <label>Nombre: </label>
    <input type="text" name="nombre" value="<?php echo isset($nombre)?$nombre:''; ?>"><br/>
    <label>Activo: <input type="checkbox" values="yes">
    <label>Fecha registro: </label><input type="text" name="fec_reg" value="<?php echo isset($fec_reg)?$fec_reg:''; ?>"><br/>
    <label>Fecha de ultima actualizacion: </label><input type="text" name="fec_ulti_actu" value="<?php echo isset($fec_ulti_actu)?$fec_ulti_actu:''; ?>"><br/>
    <input type="submit" name="Enviar" values=''>    
    
</form>




