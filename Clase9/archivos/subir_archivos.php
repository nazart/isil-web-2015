<?php
if (!empty($_FILES)) {
    if ($_FILES['archivo']["error"] > UPLOAD_ERR_OK) {
        echo "Error: " . $_FILES['archivo']['error'] . "<br>";
    } else {
        echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
        echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
        echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
        echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
      /* ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos */
        move_uploaded_file($_FILES['archivo']['tmp_name'], "imagenes/" . $_FILES['archivo']['name']);
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
                <br><input type="file" name="archivo">
                <br><input type="submit" value="Enviar" />
            </p>
        </form>
    </body>
</html>