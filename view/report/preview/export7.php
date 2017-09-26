<?php
require('../../../pdf/fpdf.php');


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../../../assets/img/logo.png' , 25 ,6, 30 , 28,'png');


$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(60, 8, '', 0);
$pdf->Cell(100, 8, 'PERSAN CONSTRUCTION, INC.', 0,0);
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(79, 8, '', 0);
$pdf->Cell(100, 8, '249 Quirino Highway, Baesa, Quezon City', 0,'C');
$pdf->Ln(4);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(75, 8, '', 0);
$pdf->Cell(100, 8, 'Telephone No. 456-0883 / 453-7109 / 361-1448', 0,'C');
$pdf->Ln(4);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(97, 8, '', 0);
$pdf->Cell(100, 8, 'Fax No. :362-4025', 0,'C');
$pdf->Ln(4);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(80, 8, '', 0);
$pdf->Cell(100, 8, 'E-mail Address: persan_inc@yahoo.com', 0,'C');
$pdf->Ln(13);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'PROJECT PHOTOGRAPH REPORT', 0,'C');
$pdf->Ln(12);

$pdf->SetFont('Arial', '', 9);

$pdf->Cell(40, 8, 'Project Name:', 1);
$pdf->Cell(5, 8, ':', 1,0,'C');
$pdf->Cell(130, 8, '', 1);
$pdf->Ln(8);
$pdf->Cell(40, 8, 'Project Location:', 1);
$pdf->Cell(5, 8, ':', 1,0,'C');
$pdf->Cell(130, 8, '', 1);
$pdf->Ln(8);
$pdf->Cell(40, 8, 'Client:', 1);
$pdf->Cell(5, 8, ':', 1,0,'C');
$pdf->Cell(130, 8, '', 1);
$pdf->Ln(8);
$pdf->Cell(40, 8, 'Period Covered:', 1);
$pdf->Cell(5, 8, ':', 1,0,'C');
$pdf->Cell(130, 8, '', 1);
$pdf->Ln(8);

$pdf->Output();
?>