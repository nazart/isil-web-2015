<!DOCTYPE html>
<!--
La sentencia require es idéntico a include excepto que en caso de fallo producirá un error fatal 
de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras que include sólo 
emitirá una advertencia (E_WARNING) lo cual permite continuar el script. 
-->
<html>
    <?php
    $titulo = 'Include';
    $meta = [
    ['item'=>'description','valueItem'=>'Pagina de require','content'=>'Contenido de la pagina require'],
    ['item'=>'description','valueItem'=>'Pagina de require','content'=>'Contenido de la pagina require'],
    ['item'=>'description','valueItem'=>'Pagina de require','content'=>'Contenido de la pagina require'],
        ];
    /* Include */
    require 'header.php';?>
    <?php // print_r(get_require_path());  ?>
    <body>
        <?php require 'banner.php'; ?>
        <?php require 'content.php'; ?>
    </body>
</html>