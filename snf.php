<?php
use setasign\Fpdi\Fpdi;

require_once('fpdf.php');
require_once('FPDI-2.2.0/src/autoload.php');

$fname = $_GET['fname'];
// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile('snf.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 220,300);

// now write some text above the imported page
$pdf->SetFont('Arial','B',9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 59);
$pdf->Write(0, strtoupper($fname));

$pdf->Output();