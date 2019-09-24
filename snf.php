<?php
require('./vendor/autoload.php');

$pdf = new FPDF();

// page formatting
$pdf->SetTitle('Student Nomination Form');
$pdf->SetMargins(25.0, 30.0);
$pdf->AddPage('P', 'A4');

// page title
$pdf->Cell(55);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(48, 0, 'STUDENT NOMINATED');

// reference number
$pdf->Cell(6);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(12.5, 0.6, 'Ref. No.');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(14, 0.6, $_POST['ref']);
$pdf->Ln(5);

// important note
$pdf->SetFont('Arial', 'BU', 9);
$pdf->Write(5, 'IMPORTANT:');
$pdf->SetFont('Arial', '', 9);
$pdf->Write(5, ' Under no circumstances are you allowed to contact the company before being accepted. You are accepted for this training offer only after receipt of the IAESTE acceptance forms.');
$pdf->Ln(8);

// line
$pdf->SetLineWidth(0.2);
$pdf->Line($pdf->GetX() + 1, $pdf->GetY(), $pdf->GetX() + 159, $pdf->GetY());
$pdf->Ln(5);

// personal information section
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(0, 0, 'Personal Information');
$pdf->Ln(6);

// family name
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(20, 0, 'Family name:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(65, 0, strtoupper($_POST['fname']));
$pdf->Cell(5);

// date of birth
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(44, 0, 'Date of birth (day/month/year):');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(14, 0, date("d/m/Y", strtotime($_POST['dob'])));
$pdf->Ln(4);

// place of birth
$pdf->Cell(90);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(21, 0, 'Place of birth:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(46, 0, strtoupper($_POST['pob']));
$pdf->Ln(4);

// first/other name
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(37, 0, 'First and/or other names:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(48, 0, strtoupper($_POST['name']));
$pdf->Cell(5);

// nationality
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(17, 0, 'Nationality:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(40, 0, strtoupper($_POST['nat']));
$pdf->Ln(8);

// home address line 1
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(23, 0, 'Home address:');
// $pdf->SetFont('Arial', 'B', 9);
// $pdf->Cell(62, 0, strtoupper($_POST['hal1']) . ',');
$pdf->Cell(67);

// passport
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(19, 0, 'Passport no:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(20, 0, $_POST['pass-no']);
$pdf->Ln(4);

// home address line 2
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(85, 0, strtoupper($_POST['hal1']) . ',');
$pdf->Cell(5);

// date of issue
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(46, 0, 'Date of Issue (day/month/year):');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(14, 0, date("d/m/Y", strtotime($_POST['doi'])));
$pdf->Ln(4);

// home address line 3
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(85, 0, strtoupper($_POST['hal2']));
$pdf->Cell(5);

// place of issue
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(22, 0, 'Place of Issue:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(46, 0, strtoupper($_POST['poi']));
$pdf->Ln(4);

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(85, 0, strtoupper($_POST['hal3']));
$pdf->Cell(5);

// valid until
//$pdf->Cell(90);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(41, 0, 'Valid until (day/month/year):');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(14, 0, date("d/m/Y", strtotime($_POST['vu'])));
$pdf->Ln(5);

// phone number
// FIXME: formatting of international phone number
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(16, 0, 'Phone no:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(35, 0, $_POST['phn']);
$pdf->Ln(4);

// email
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(10, 0, 'Email:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(76, 0, $_POST['email']);
$pdf->Cell(4);

// sex
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(8, 0, 'Sex:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 0, strtoupper($_POST['sex']));
$pdf->Ln(8);

// address during terms
// FIXME: need better format for address either 3-line or 4-line
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(33, 0, 'Address during terms:');
$pdf->Cell(57);

// marital status
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(21, 0, 'Marital status:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 0, strtoupper($_POST['ms']));
$pdf->Ln(4);

// address during terms line 1
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(85, 0, strtoupper($_POST['adl1']) . ',');
$pdf->Ln(4);

// address during terms line 2
$pdf->Cell(85, 0, strtoupper($_POST['adl2']) . ',');
$pdf->Ln(4);

// address during terms line 3
$pdf->Cell(85, 0, strtoupper($_POST['adl3']));
$pdf->Ln(10);

// alternate phone number
// FIXME: formatting of international alternate phone number
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(16, 0, 'Phone no:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(35, 0, $_POST['phn']);
$pdf->Cell(39);

// medical status
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(31, 0, 'Are you medically fit:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(35, 0, strtoupper($_POST['med']));
$pdf->Ln(4);

// alternate email
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(10, 0, 'Email:');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(76, 0, $_POST['alt-email']);
$pdf->Ln(4);

// line
$pdf->SetLineWidth(0.2);
$pdf->Line($pdf->GetX() + 1, $pdf->GetY(), $pdf->GetX() + 159, $pdf->GetY());
$pdf->Ln(5);

$pdf->Output();
