<?php
if (isset($_POST) and !empty($_POST)) {
    $marca = new entity_marca();
    $persona->setPropertie('nombre', $_POST['nombre']);
    $persona->setPropertie('apellido', $_POST['apellidos']);
    $persona->setPropertie('direccion', $_POST['direccion']);
    $persona->nuevoUsuario();
    header('Location: http://localhost:8082/class/index.php ');
}else{
    
}
?>
<form>
    <label>Nombre: </label><input type="text" name="nombre" value="<?php echo isset($nombre)?$nombre:''; ?>"><br/>
    <label>Estado: </label><select name="menu" >
    <?php if(isset($estado)){
        
        if($estado==0){
        ?>
            <option value="0" selected>0</option>
            <option value="1">1</option>
        <?php } elseif ($estado==1){
        ?>
            <option value="0">0</option>
            <option value="1" selected>1</option>
    <?php } 
    }
    else{
    ?>
        <option value="0" selected>0</option>
        <option value="1">1</option>
    <?php
    }
    ?>
    </select><br/>
    <button type="submit">Guardar</button>
</form>