<?php
//require __DIR__ . '/vendor/autoload.php';

require('fpdf.php');

$pdf = new FPDF();

$pdf->SetTitle("Student Nomination Form");
$pdf->SetMargins(25.0, 30.0);

$pdf->AddPage('P', 'A4');

$pdf->Cell(40);
$pdf->SetFont("Arial", 'B', '16');
$pdf->Cell(70, 0, "STUDENT NOMINATED", 0, 0, '');

$pdf->SetFont("Arial", '', '12');
$pdf->Cell(20, 0, "Ref. No.", 0, 0, '');

// TODO: Add code for Ref. No.
$pdf->Ln(5);

$pdf->SetFont('Arial', 'BU', 12);
$pdf->Write(5, "IMPORTANT:");

$pdf->SetFont('Arial', '', 12);
$pdf->Write(5, " Under no circumstances are you allowed to contact the company before being accepted. You are accepted for this training offer only after receipt of the IAESTE acceptance forms.");

$pdf->Ln(10);

$pdf->SetLineWidth(0.6);
$pdf->Line($pdf->GetX() + 1, $pdf->GetY(), $pdf->GetX() + 155, $pdf->GetY());
$pdf->Ln(5);

$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(0, 0, "Personal Information", 0, 1, 'L');

$pdf->SetFont('Arial', '', 11);
$pdf->Cell(40, 15, "Family name:", 0, 0, 'L');
$pdf->Cell(35, 15, "", 0, 0, 'L'); // TODO: Add family name from the form.html

$pdf->Cell(45, 15, "Date of birth (day/month/year):", 0, 0, 'L');
$pdf->Cell(20, 15, "", 0, 1, 'L'); // TODO: Add date of birth from the form.html

$pdf->Cell(45, 4, "First and/or other names:", 0, 0, 'L');
$pdf->Cell(0, 4, "", 0, 1, 'L'); // TODO: Add first name from the form.html

$pdf->Ln(1);
$pdf->Cell(75);
$pdf->Cell(45, 4, "Place of birth:", 0, 0, 'L');
$pdf->Cell(0, 4, "", 0, 1, 'L'); // TODO: Add place of birth from the form.html

$pdf->Ln();
$pdf->Cell(45, 4, "Home address:", 0, 0, 'L');
$pdf->Cell(30, 4, "", 0, 0, 'L'); // TODO: Add home address from the form.html

$pdf->Cell(40, 4, "Nationality:", 0, 0, 'L');
$pdf->Cell(0, 4, "", 0, 1, 'L'); // TODO: Add nationality from the form.html

$pdf->Ln(10);
$pdf->Cell(75);
$pdf->Cell(45, 4, "Passport no:", 0, 0, 'L');
$pdf->Cell(0, 4, "", 0, 1, 'L'); // TODO: Add passport number from the form.html

$pdf->Ln(5);
$pdf->Cell(45, 4, "Phone no:", 0, 0, 'L');
$pdf->Cell(30, 4, "", 0, 0, 'L'); // TODO: Add phone numeber from the form.html

$pdf->Cell(40, 4, "Date of issue (day/month/year):", 0, 0, 'L');
$pdf->Cell(0, 4, "", 0, 1, 'L'); // TODO: Add date of issue from the form.html

$pdf->Ln(5);
$pdf->Cell(75);
$pdf->Cell(45, 4, "Place of Issue:", 0, 0, 'L');
$pdf->Cell(0, 4, "", 0, 1, 'L'); // TODO: Add place of issue from the form.html

$pdf->Ln(1);
$pdf->Cell(45, 4, "Email:", 0, 0, 'L');
$pdf->Cell(0, 4, "", 0, 1, 'L'); // TODO: Add email from the form.html

$pdf->Ln(0);
$pdf->Cell(75);
$pdf->Cell(45, 4, "Valid until (day/month/year):", 0, 0, 'L');
$pdf->Cell(0, 4, "", 0, 1, 'L'); // TODO: Add valid until from the form.html

$pdf->Ln(1);
$pdf->Cell(45, 4, "Address during terms:", 0, 0, 'L');
$pdf->Cell(0, 4, "", 0, 1, 'L'); // TODO: Add email from the form.html

$pdf->Output();
