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
$inputFileName = realpath((__DIR__).'/alumnos.xlsx');
echo 'Cargando el archivo ',pathinfo($inputFileName,PATHINFO_BASENAME),' usando IOFactory para identificar el tipo de formato<br />';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
echo '<hr />';
$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet->getHighestRow();/*cantidad de filas que se esta barriendo*/
$highestColumn = 'c';
$arrayErrores = array();/*almacenar los errores*/
for ($row = 2; $row <= $highestRow; $row++) {
    /*me devuelve cada fila*/
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
    $data[] = $rowData[0];/*obtengo la fila sin indices*/
        foreach ($rowData[0] as $indice => $valorIndice) {/*leer cada valor de la fila actual*/
        $col = ($indice + 1);
        if ($col == 3) { /*en la columna 3 ejecuta esta condicion*/
            if(!filter_var($valorIndice, FILTER_VALIDATE_EMAIL)){
                $arrayErrores[] = 'El correo es invalido en la columna:'.$col.' de la fila :'.$row.' :'.$valorIndice."\n";
            }
        }
    }
}
$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
if(!empty($arrayErrores)){
    foreach ($arrayErrores as $index){
        echo '<p>'.$index;
    }
}else{
    echo '<p>Archivo correcto';
    
}
//print_r($sheetData);
?>
<body>
</html>