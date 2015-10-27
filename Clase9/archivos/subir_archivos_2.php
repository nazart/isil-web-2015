<?php

function validateMimeFile($mimeArchivoActual, $extencionArchivoActual) {
    $mime_types = array(
        'txt' => 'text/plain',
        'htm' => 'text/html',
        'html' => 'text/html',
        'php' => 'text/html',
        'css' => 'text/css',
        'js' => 'application/javascript',
        'json' => 'application/json',
        'xml' => 'application/xml',
        'swf' => 'application/x-shockwave-flash',
        'flv' => 'video/x-flv',
        // images
        'png' => 'image/png',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'jpe' => 'image/jpeg',
        'gif' => 'image/gif',
        'bmp' => 'image/bmp',
        'ico' => 'image/vnd.microsoft.icon',
        'tiff' => 'image/tiff',
        'tif' => 'image/tiff',
        'svg' => 'image/svg+xml',
        'svgz' => 'image/svg+xml',
        // archives
        'zip' => 'application/zip',
        'rar' => 'application/x-rar-compressed',
        'exe' => 'application/x-msdownload',
        'msi' => 'application/x-msdownload',
        'cab' => 'application/vnd.ms-cab-compressed',
        // audio/video
        'mp3' => 'audio/mpeg',
        'qt' => 'video/quicktime',
        'mov' => 'video/quicktime',
        // adobe
        'pdf' => 'application/pdf',
        'psd' => 'image/vnd.adobe.photoshop',
        'ai' => 'application/postscript',
        'eps' => 'application/postscript',
        'ps' => 'application/postscript',
        // ms office
        'doc' => 'application/msword',
        'rtf' => 'application/rtf',
        'xls' => 'application/vnd.ms-excel',
        'ppt' => 'application/vnd.ms-powerpoint',
        // open office
        'odt' => 'application/vnd.oasis.opendocument.text',
        'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
    );
    $mimeAsociado = $mime_types[$extencionArchivoActual];
    if ($mimeArchivoActual != $mimeAsociado) {
        return FALSE;
    }
    return TRUE;
}

if (!empty($_FILES)) {
    
    if ($_FILES['archivo']["error"] > UPLOAD_ERR_OK) {
        echo "Error: " . $_FILES['archivo']['error'] . "<br>";
    } else {
        $extension = array_pop(explode('.', $_FILES['archivo']['name']));
        $mimeArchivoActual = mime_content_type($_FILES['archivo']['tmp_name']);
        if (validateMimeFile($mimeArchivoActual, $extension)) {
            echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
            echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
            echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
            echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
            /* ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos */
            move_uploaded_file($_FILES['archivo']['tmp_name'], "imagenes/" . $_FILES['archivo']['name']);
        } else {
            echo 'El archivo no es correcto <br>';
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
                <br><input type="file" name="archivo">
                <br><input type="submit" value="Enviar" />
            </p>
        </form>
    </body>
</html>