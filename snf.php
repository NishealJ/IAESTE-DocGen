<?php
require_once("fpdf.php");

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);

$pdf->SetTitle("Title");
$pdf->Cell(40);
$pdf->Cell(82,10,"STUDENT NOMINATED",0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(15,10,'Ref. No.',0,0);
$pdf->Cell(30,10,$_POST['fname'],0,1);

$pdf->Cell(10);
$pdf->SetFont('ARIAL','UB',9);
$pdf->Write(10, "IMPORTANT:");

$pdf->SetFont('ARIAL','',10.5);
$pdf->Write(10," Under no circumstances are you allowed to contact the company before being accepted.");
$pdf->output();

?>