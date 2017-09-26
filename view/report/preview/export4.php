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
$pdf->Cell(100, 8, 'MONTHLY WORK SCHEDULE', 0,'C');
$pdf->Ln(12);

$pdf->SetFont('Arial', '', 9);

$pdf->Cell(70, 10, 'For the month of:', 1);
$pdf->Cell(25, 10, ' ', 1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(72, 10, 'Cumulative month:', 1);
$pdf->Cell(25, 10, ' ', 1);
$pdf->Ln(10);
$pdf->Cell(70, 10, 'Project Name:', 1);
$pdf->Cell(122, 10, ' ', 1);
$pdf->Ln(10);
$pdf->Cell(70, 10, 'Location:', 1);
$pdf->Cell(122, 10, ' ', 1);
$pdf->Ln(10);

$pdf->Cell(70, 10, 'Date Started:', 1);
$pdf->Cell(25, 10, ' ', 1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(72, 10, 'Target Completion:', 1);
$pdf->Cell(25, 10, ' ', 1);
$pdf->Ln(15);
$pdf->Cell(15, 8, 'Material Requirements:', 0);
$pdf->Ln(10);
$pdf->Cell(15, 16, 'Item No.', 1);
$pdf->Cell(60, 8, 'Material Quantity Required', 1,0,'C');
$pdf->Cell(35, 16, 'Work Description', 1,0,'C');
//$pdf->Cell(2, 8, '', 0);
$pdf->Cell(15, 16, 'Duration', 1,0,'C');
$pdf->Cell(67, 8, 'Weekly Schedule', 1,0,'C');
//$pdf->Cell(11, 8, 'No.', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(15, 8, '', 0);
$pdf->Cell(30, 8, 'Balance', 1,0,'C');
$pdf->Cell(30, 8, 'Projected', 1,0,'C');
$pdf->Cell(35, 8, '', 0,0,'C');
$pdf->Cell(15, 8, '', 0,0,'C');
$pdf->Cell(14, 8, 'W1', 1,0,'C');
$pdf->Cell(14, 8, 'W2', 1,0,'C');
$pdf->Cell(14, 8, 'W3', 1,0,'C');
$pdf->Cell(14, 8, 'W4', 1,0,'C');
$pdf->Cell(11, 8, 'W5', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(15, 8, '1', 1);
$pdf->Cell(30, 8, '', 1,0,'C');
$pdf->Cell(30, 8, '', 1,0,'C');
$pdf->Cell(35, 8, '', 1,0,'C');
$pdf->Cell(15, 8, '', 1,0,'C');
$pdf->Cell(14, 8, '', 1,0,'C');
$pdf->Cell(14, 8, '', 1,0,'C');
$pdf->Cell(14, 8, '', 1,0,'C');
$pdf->Cell(14, 8, '', 1,0,'C');
$pdf->Cell(11, 8, '', 1,0,'C');


$pdf->Ln(15);
$pdf->Cell(15, 8, 'Equipment Requirements:', 0);
$pdf->Ln(10);
$pdf->Cell(75, 16, 'Description', 1,0,'C');
$pdf->Cell(15, 16, 'Quantity', 1,0,'C');
$pdf->Cell(30, 16, 'Estimated Duration', 1,0,'C');
//$pdf->Cell(2, 8, '', 0);
$pdf->Cell(15, 16, 'Duration', 1,0,'C');
$pdf->Cell(57, 8, 'Schedule', 1,0,'C');
//$pdf->Cell(11, 8, 'No.', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(20, 8, '', 0);
$pdf->Cell(30, 8, '', 0,0,'C');
$pdf->Cell(30, 8, '', 0,0,'C');
$pdf->Cell(35, 8, '', 0,0,'C');
$pdf->Cell(20, 8, '', 0,0,'C');
$pdf->Cell(12, 8, 'W1', 1,0,'C');
$pdf->Cell(12, 8, 'W2', 1,0,'C');
$pdf->Cell(11, 8, 'W3', 1,0,'C');
$pdf->Cell(11, 8, 'W4', 1,0,'C');
$pdf->Cell(11, 8, 'W5', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(75, 8, '', 1,0,'C');
$pdf->Cell(15, 8, '', 1,0,'C');
$pdf->Cell(30, 8, ' ', 1,0,'C');
//$pdf->Cell(2, 8, '', 0);
$pdf->Cell(15, 8, '', 1,0,'C');
$pdf->Cell(12, 8, '', 1,0,'C');
$pdf->Cell(12, 8, '', 1,0,'C');
$pdf->Cell(11, 8, '', 1,0,'C');
$pdf->Cell(11, 8, '', 1,0,'C');
$pdf->Cell(11, 8, '', 1,0,'C');

$pdf->Ln(15);
$pdf->Cell(15, 8, 'Manpower Requirements:', 0);
$pdf->Ln(10);
$pdf->Cell(75, 16, 'Description', 1,0,'C');
$pdf->Cell(15, 16, 'Quantity', 1,0,'C');
$pdf->Cell(30, 16, 'Estimated Duration', 1,0,'C');
//$pdf->Cell(2, 8, '', 0);
$pdf->Cell(15, 16, 'Duration', 1,0,'C');
$pdf->Cell(57, 8, 'Schedule', 1,0,'C');
//$pdf->Cell(11, 8, 'No.', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(20, 8, '', 0);
$pdf->Cell(30, 8, '', 0,0,'C');
$pdf->Cell(30, 8, '', 0,0,'C');
$pdf->Cell(35, 8, '', 0,0,'C');
$pdf->Cell(20, 8, '', 0,0,'C');
$pdf->Cell(12, 8, 'W1', 1,0,'C');
$pdf->Cell(12, 8, 'W2', 1,0,'C');
$pdf->Cell(11, 8, 'W3', 1,0,'C');
$pdf->Cell(11, 8, 'W4', 1,0,'C');
$pdf->Cell(11, 8, 'W5', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(75, 8, '', 1,0,'C');
$pdf->Cell(15, 8, '', 1,0,'C');
$pdf->Cell(30, 8, ' ', 1,0,'C');
//$pdf->Cell(2, 8, '', 0);
$pdf->Cell(15, 8, '', 1,0,'C');
$pdf->Cell(12, 8, '', 1,0,'C');
$pdf->Cell(12, 8, '', 1,0,'C');
$pdf->Cell(11, 8, '', 1,0,'C');
$pdf->Cell(11, 8, '', 1,0,'C');
$pdf->Cell(11, 8, '', 1,0,'C');

$pdf->Ln(11);
$pdf->Cell(15, 8, 'Remarks:', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(192, 30, '', 1,0,'L');





$pdf->Ln(35);
$pdf->Cell(27,8,'Prepared by:',1);
$pdf->Cell(36,8,'',1,0,'C');

$pdf->Ln(8);
$pdf->Cell(27,8,'Approved by:',1);
$pdf->Cell(36,8,'',1,0,'C');

//$pdf->Cell(31,8,'Total Unitario: S/. '.$totaluni,0);
//$pdf->Cell(32,8,'Total Dist: S/. '.$totaldis,0);
$pdf->Output();
?>