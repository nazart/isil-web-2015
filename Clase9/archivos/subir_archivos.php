<?php
if (!empty($_POST)) {
    echo 'El nombre es: '.$_POST['nombre'].'<br>';
    echo 'El apellido es: '.$_POST['apellidos'].'<br>';
    if (!empty($_FILES)) {
        if ($_FILES['archivo']["error"] > UPLOAD_ERR_OK) {
            echo "Error: " . $_FILES['archivo']['error'] . "<br>";
        } else {
            $extension = array_pop(explode('.', $_FILES['archivo']['name']));
            echo "Nombre: " . $_FILES['archiarray_popvo']['name'] . "<br>";
            echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
            echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
            echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
            $nombreAlmacenado = 'archivo_Perfil_'.(rand(100, 100000)).time().'.'.$extension;
            /* ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos */
            move_uploaded_file($_FILES['archivo']['tmp_name'], "imagenes/" . $nombreAlmacenado);
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Subir Archivos</title>
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>Subida de archivos:
                <br>Nombre Alumno: <input type="text" name="nombre">
                <br>Apellidos Alumno: <input type="text" name="apellidos">
                <br>Foto Alumno: <input type="file" name="archivo">
                <br><input type="submit" value="Enviar" />
            </p>
        </form>
    </body>
</html>