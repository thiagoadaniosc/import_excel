<?php
include_once('bootstrap.php');

$reader         = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xls');
$reader->setReadDataOnly(true);
$spreadsheet    = $reader->load('file_example_XLS_10.xls');
$workSheet      = $spreadsheet->getActiveSheet();
$header         = array();
$tableBody      = array(); 

foreach ($workSheet->getRowIterator() as $rowindex=>$row) {
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(true);
    $cellIndex = 0;

    foreach( $cellIterator as $cell ){
        if ($rowindex == 1) {
            $header[] = $cell->getValue();
        } else {
            $tableBody[$rowindex][$header[$cellIndex]] = $cell->getValue();
        }
        $cellIndex++;
    }
}

$data['tableHeader']    = $header;
$data['tableBody']      = $tableBody;

getView('table', $data);
// echo json_encode($tableBody);