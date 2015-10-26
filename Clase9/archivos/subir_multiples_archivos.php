<?php
if (!empty($_FILES)) {
    foreach ($_FILES["imagenes"]["error"] as $clave => $error) {
        if ($error == UPLOAD_ERR_OK) {
            /*si no hubo errores*/
            $nombre_tmp = $_FILES["imagenes"]["tmp_name"][$clave];
            $nombre = $_FILES["imagenes"]["name"][$clave];
            move_uploaded_file($nombre_tmp, "imagenes/$nombre");
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
            <p>Imágenes:
                <br><input type="file" name="imagenes[]">
                <br><input type="file" name="imagenes[]">
                <br><input type="file" name="imagenes[]">
                <br><input type="submit" value="Enviar" />
            </p>
        </form>
    </body>
</html>