<?php
require_once'connect.php';
require_once 'tfpdf/tfpdf.php';
	$pdf = new tFPDF();
$pdf->AddPage();

$pdf->AddFont('PDFFont','','arial.ttf',true);

$pdf->SetFont('PDFFont','',12);
$pdf->Cell(80);
$txt ='Автомобильный ряд';
$pdf->Cell(41,10,$txt,1,0,'C');
$pdf->Ln(20);
$pdf->SetFont('PDFFont','',6);

$res = mysqli_query($mysql,"SELECT auto.cash, 
cars.marka as marka,
cars.model as model,
cars.god as god,
cars.trans as trans,
saloon.name as name,
saloon.address as address
FROM auto
LEFT JOIN cars ON auto.id_cars=cars.id
LEFT JOIN saloon ON auto.id_saloon=saloon.id_show");
$w = array(10,30,40,);
$h = 7;
$pdf->SetFillColor(255,255,255);
$pdf->Cell($w[0],$h,'п/п','LRTB','0','C',true);
$pdf->Cell($w[0],$h,'Марка','LRTB','0','C',true);
$pdf->Cell($w[0],$h,'Модель','LRTB','0','C',true);
$pdf->Cell($w[0],$h,'Год выпуска','LRTB','0','C',true);
$pdf->Cell($w[0],$h,'Трансмиссия','LRTB','0','C',true);
$pdf->Cell($w[1],$h,'Стоимость','LRTB','0','C',true);
$pdf->Cell($w[1],$h,'Название автосалона','LRTB','0','C',true);
$pdf->Cell($w[2],$h,'Адрес','LRTB','0','C',true);
$pdf->Ln();

if ($res){
$c = 1;
while ($row = $res->fetch_array()){
$marka = $row['marka'];
$model = $row['model'];
$god = $row['god'];
$trans = $row['trans'];
$cash = $row['cash'];
$name = $row['name'];
$address = $row['address'];
$pdf->Cell($w[0],$h,$c,'LRTB','0','C');
$pdf->Cell($w[0],$h,$marka,'LRTB','0','C',true);
$pdf->Cell($w[0],$h,$model,'LRTB','0','C',true);
$pdf->Cell($w[0],$h,$god,'LRTB','0','C',true);
$pdf->Cell($w[0],$h,$trans,'LRTB','0','C',true);
$pdf->Cell($w[1],$h,$cash,'LRTB','0','C',true);
$pdf->Cell($w[1],$h,$name,'LRTB','0','C',true);
$pdf->Cell($w[2],$h,$address,'LRTB','0','C',true);
$pdf->Ln();
$c++;
}
}

$pdf->Output("I",'Cars.pdf',true);
?>