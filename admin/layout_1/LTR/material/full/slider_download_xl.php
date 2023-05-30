<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php



use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

// $spreadsheet = new Spreadsheet();
//$activeWorksheet = $spreadsheet->getActiveSheet();
// $activeWorksheet->setCellValue('A1', 'Hello World !');


//dd('sdf');






$spreadsheet = new Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', '#');
$sheet->setCellValue('B1', 'Title');
$sheet->setCellValue('C1', 'Src');
$sheet->setCellValue('D1', 'Alt');
$sheet->setCellValue('E1', 'Caption');
$sheet->setCellValue('F1', 'Actoion');



foreach($sliders as $key=> $slider){
  $fileVslue = 2+$key;
  $sheet->setCellValue('A'.$fieldValue, ++$key);
  $sheet->setCellValue('B'.$fieldValue, $slider->title);
  $sheet->setCellValue('C'.$fieldValue, $slider->alt);
   //image 
   $imagePath = $uploads.$slider->src;
   $drowing = new Drawing();
   $drowning->setName('Image');
   $drowning->setAlt('Image');
   $drowning->setPath($imagePath);
   $drowning->setCoordinates('D'.$fieldValue);
   $drowning->setHeight(30);
   $drowning->setWidth(40);
   $drowning->setWorksheet($sheet);


   $sheet->setCellValue('E'.$fieldValue, ($slider->status? 'Active' : 'inactive'));


}
  //set appropite header 
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment;filename="example.xlxs"');
  header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save($uploads.'php://output');

