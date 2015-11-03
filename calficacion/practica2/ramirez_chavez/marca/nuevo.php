<?php 
if (isset($_POST) and !empty($_POST)) {
    $marca = new marca();
    $marca->setPropertie('marca', $_POST['marca']);
    $marca->setPropertie('estado', $_POST['estado']);

}else{
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ingresar Nueva Marca</title>
    </head>
    <body>
        <form method="POST" action="">
            <label>Marca</label><input type="text" name="marca" value="<?php  ?>">
            <label>Estado</label><input type="text" name="estado">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>