<?php

?>
<?php
error_reporting(E_ALL);
set_time_limit(0);
date_default_timezone_set('Europe/London');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>PHPExcel Reader Example #01</title>

</head>
<body>

<h1>PHPExcel Leer Archivo</h1>
<h2>Usando PHPExcel_IOFactory::load()</h2>
<?php
include_once './PHPExcel/PHPExcel.php';
$inputFileName = 'alumnos.xlsx';
echo 'Cargando el archivo ',pathinfo($inputFileName,PATHINFO_BASENAME),' usando IOFactory para identificar el tipo de formato<br />';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
echo '<hr />';
$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
print_r($sheetData);
?>
<body>
</html>