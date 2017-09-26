<?php
require('../../../pdf/fpdf.php');


$pdf = new FPDF();
$pdf->AddPage('L');
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../../../assets/img/logo.png' , 70 ,6, 30 , 28,'png');


$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(110, 8, '', 0);
$pdf->Cell(100, 8, 'PERSAN CONSTRUCTION, INC.', 0,0);
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(130, 8, '', 0);
$pdf->Cell(100, 8, '249 Quirino Highway, Baesa, Quezon City', 0,'C');
$pdf->Ln(4);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(125, 8, '', 0);
$pdf->Cell(100, 8, 'Telephone No. 456-0883 / 453-7109 / 361-1448', 0,'C');
$pdf->Ln(4);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(150, 8, '', 0);
$pdf->Cell(100, 8, 'Fax No. :362-4025', 0,'C');
$pdf->Ln(4);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(130, 8, '', 0);
$pdf->Cell(100, 8, 'E-mail Address: persan_inc@yahoo.com', 0,'C');
$pdf->Ln(13);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(100, 8, '', 0);
$pdf->Cell(100, 8, 'MONTHLY ACCOMPLISHMENT REPORT EVALUATION', 0,'C');
$pdf->Ln(12);

$pdf->SetFont('Arial', 'B', 8);
//$pdf->Cell(50, 10, '', 0);
$pdf->Cell(14, 20, 'Item No.', 1);
$pdf->Cell(50, 20, ' Work Description', 1,0,'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(15, 20, 'Unit', 1,0,'C');
$pdf->Cell(15, 20, 'Quantity', 1,0,'C');
$pdf->Cell(15, 20, 'Unit Cost', 1,0,'C');
$pdf->Cell(15, 20, 'Amount', 1,0,'C');
$pdf->Cell(18, 20, 'Weight (%)', 1,0,'C');
$pdf->Cell(50, 10, 'Accomplishment (Quantity)', 1,0,'C');
$pdf->Cell(50, 10, 'Amount', 1,0,'C');
$pdf->Cell(40, 20, 'Weight Accomplished (%)', 1,0,'C');
$pdf->Ln(10);
$pdf->Cell(142, 10, '', 0,0,'C');
$pdf->Cell(15, 10, 'Prev', 1,0,'C');
$pdf->Cell(20, 10, 'This period', 1,0,'C');
$pdf->Cell(15, 10, 'To date', 1,0,'C');
$pdf->Cell(15, 10, 'Prev', 1,0,'C');
$pdf->Cell(20, 10, 'This period', 1,0,'C');
$pdf->Cell(15, 10, 'To date', 1,0,'C');

$pdf->Ln(10);
$pdf->Cell(14, 10, '1', 1,0,'C');
$pdf->Cell(50, 10, ' ', 1,0,'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(18, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(20, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(20, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(40, 10, '', 1,0,'C');
$pdf->Ln(10);
$pdf->Cell(64, 10, 'TOTAL:', 1,0,'R');

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(18, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(20, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(20, 10, '', 1,0,'C');
$pdf->Cell(15, 10, '', 1,0,'C');
$pdf->Cell(40, 10, '', 1,0,'C');





$pdf->Ln(35);
$pdf->Cell(30,8,'Prepared by:',1);
$pdf->Cell(34,8,'',1,0,'C');

$pdf->Ln(8);
$pdf->Cell(30,8,'Noted by:',1);
$pdf->Cell(34,8,'',1,0,'C');

//$pdf->Cell(31,8,'Total Unitario: S/. '.$totaluni,0);
//$pdf->Cell(32,8,'Total Dist: S/. '.$totaldis,0);
$pdf->Output();
?>