<!DOCTYPE html>
<!--
La sentencia include incluye y evalúa el archivo especificado. 
Incluye tambien los elementos que se encuentran dentro de @include_path@ que es un valor donde se almacena 
archivos extras para ser cargados como si estuvieran dentro del mismo proyecto
-->
<html>
    <?php
    $titulo = 'Include del index dos';
    $meta = [
    ['item'=>'description','valueItem'=>'Pagina de include','content'=>'Contenido de la pagina include'],
    ['item'=>'description','valueItem'=>'Pagina de include','content'=>'Contenido de la pagina include'],
    ['item'=>'description','valueItem'=>'Pagina de include','content'=>'Contenido de la pagina include'],
        ];
    /* Include */
    include 'header.php';?>
    <?php include 'header.php';?>
    <?php print_r(get_include_path());  ?>
    <body>
        <?php include 'banner.php'; ?>
        <?php include 'content.php'; ?>
    </body>
</html>