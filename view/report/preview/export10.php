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
$pdf->Ln(11);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(65, 8, '', 0);
$pdf->Cell(70, 8, 'MATERIALS/ TOOLS TURNOVER REPORT', 0,'C');
$pdf->Ln(7);

$pdf->SetFont('Arial', 'B', 8);


$pdf->Ln(1);
$pdf->Cell(50, 8, 'Project', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, 'MTTR Number', 1);

$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(14);
$pdf->Cell(192, 8, 'CONSTRUCTION MATERIALS', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 16, 'Item', 1,0,'C');
$pdf->Cell(50, 16, 'Unit', 1,0,'C');
$pdf->Cell(50, 8, 'Quantity', 1,0,'C');
$pdf->Cell(42, 16, 'Remarks', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, '', 0,0,'C');
$pdf->Cell(50, 8, '', 0,0,'C');
$pdf->Cell(17, 8, 'Usable', 1,0,'C');
$pdf->Cell(17, 8, 'Not Usable', 1,0,'C');
$pdf->Cell(16, 8, 'TOTAL', 1,0,'C');
$pdf->Cell(42, 8, '', 0,0,'C');

$pdf->Ln(8);
$pdf->Cell(5, 8, '1.', 1,0,'L');
$pdf->Cell(45, 8,'', 1,0,'L');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Cell(17, 8, '', 1,0,'C');
$pdf->Cell(17, 8, '', 1,0,'C');
$pdf->Cell(16, 8, '', 1,0,'C');
$pdf->Cell(42, 8, '', 1,0,'C');

$pdf->Ln(14);
$pdf->Cell(192, 8, 'TOOLS/APPLIANCES', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 16, 'Item', 1,0,'C');
$pdf->Cell(50, 16, 'Quantity', 1,0,'C');
$pdf->Cell(50, 8, 'Condition', 1,0,'C');
$pdf->Cell(42, 16, 'Remarks', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, '', 0,0,'C');
$pdf->Cell(50, 8, '', 0,0,'C');
$pdf->Cell(17, 8, '', 1,0,'C');
$pdf->Cell(17, 8, ' ', 1,0,'C');
$pdf->Cell(16, 8, '', 1,0,'C');
$pdf->Cell(42, 8, '', 0,0,'C');

$pdf->Ln(8);
$pdf->Cell(5, 8, '1.', 1,0,'L');
$pdf->Cell(45, 8,'', 1,0,'L');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Cell(17, 8, '', 1,0,'C');
$pdf->Cell(17, 8, '', 1,0,'C');
$pdf->Cell(16, 8, '', 1,0,'C');
$pdf->Cell(42, 8, '', 1,0,'C');

$pdf->Ln(14);
$pdf->Cell(192, 8, 'OTHERS:', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 16, 'Item', 1,0,'C');
$pdf->Cell(50, 16, 'Quantity', 1,0,'C');
$pdf->Cell(50, 8, 'Condition', 1,0,'C');
$pdf->Cell(42, 16, 'Remarks', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, '', 0,0,'C');
$pdf->Cell(50, 8, '', 0,0,'C');
$pdf->Cell(17, 8, '', 1,0,'C');
$pdf->Cell(17, 8, '', 1,0,'C');
$pdf->Cell(16, 8, '', 1,0,'C');
$pdf->Cell(42, 8, '', 0,0,'C');

$pdf->Ln(8);
$pdf->Cell(5, 8, '1.', 1,0,'L');
$pdf->Cell(45, 8,'', 1,0,'L');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Cell(42, 8, '', 1,0,'C');

$pdf->Ln(22);
$pdf->Cell(27,8,'TURNED-OVER BY:',1);
$pdf->Cell(36,8,'',1,0,'C');

$pdf->Ln(8);
$pdf->Cell(27,8,'Date:',1);
$pdf->Cell(36,8,'',1,0,'C');


$pdf->Ln(15);
$pdf->Cell(27,8,'NOTED BY:',1);
$pdf->Cell(36,8,'',1,0,'C');

$pdf->Ln(8);
$pdf->Cell(27,8,'Date:',1);
$pdf->Cell(36,8,'',1,0,'C');

$pdf->Ln(15);
$pdf->Cell(27,8,'RECEIVED BY:',1);
$pdf->Cell(36,8,'',1,0,'C');

$pdf->Ln(8);
$pdf->Cell(27,8,'Date:',1);
$pdf->Cell(36,8,'',1,0,'C');


$pdf->Output();
?>