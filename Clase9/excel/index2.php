<?php
include_once './PHPExcel/PHPExcel.php';
$objPHPExcel = new PHPExcel();
$objPHPExcel->setActiveSheetIndex(0);
$sheet = $objPHPExcel->getActiveSheet();
$row = 1;

$sheet->SetCellValue('A' . $row, 'numero');
$sheet->SetCellValue('B' . $row, 'Valor 1');
$sheet->SetCellValue('C' . $row, 'valor 2');
$sheet->SetCellValue('D' . $row, 'valor 3');
$sheet->SetCellValue('E' . $row, 'valor 4');
$sheet->SetCellValue('F' . $row, 'valor 5');

for ($row = 2; $row <= 10; $row++) {
    $sheet->SetCellValue('A' . $row, ($row - 1));
    $sheet->SetCellValue('B' . $row, 'Columna 1' . $row);
    $sheet->SetCellValue('C' . $row, 'Columna 2' . $row);
    $sheet->SetCellValue('D' . $row, 'Columna 3' . $row);
    $sheet->SetCellValue('E' . $row, 'Columna 4' . $row);
    $sheet->SetCellValue('F' . $row, 'Columna 5' . $row);
}

$sheet->getColumnDimension('A')->setAutoSize(true);
$sheet->getColumnDimension('B')->setAutoSize(true);
$sheet->getColumnDimension('C')->setAutoSize(true);
$sheet->getColumnDimension('D')->setAutoSize(true);
$sheet->getColumnDimension('E')->setAutoSize(true);
$sheet->getColumnDimension('F')->setAutoSize(true);

header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
$name = 'excel.xls';
header("Content-Disposition: attachment;filename=" . $name);
header("Content-Transfer-Encoding: binary ");

// Write xls
$objWriter = new \PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('php://output');
exit();
