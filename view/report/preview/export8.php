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
$pdf->Cell(70, 8, 'PROJECT COMPLETION REPORT', 0,'C');
$pdf->Ln(7);

$pdf->SetFont('Arial', 'B', 8);


$pdf->Ln(1);
$pdf->Cell(50, 8, 'Project Title', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, 'Project Location', 1);

$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'License ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(40, 8, '', 1,0,'C');
$pdf->Cell(50, 8, 'Project Code/Contract ID', 1,0,'C');
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(38, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 16, 'Scope of Work ', 1);
$pdf->Cell(7, 16, ':', 1,0,'C');
$pdf->Cell(40, 16, '', 1,0,'C');
$pdf->Cell(50, 8, 'Implementing Agency', 1,0,'C');
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(38, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, '', 0,0);
$pdf->Cell(7, 8, '', 0,0,'C');
$pdf->Cell(40, 8, '', 0,0,'C');
$pdf->Cell(50, 8, 'Date of NTP:', 1,0,'C');
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(38, 8, '', 1,0,'C');


$pdf->Ln(10);
$pdf->Cell(50, 8, 'Project Team: ', 0);



$pdf->Ln(8);
$pdf->Cell(50, 8, 'Project Manager ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Project Engineer ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Materials Engineer ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Safety Officer ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Construction Foreman ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(10);
$pdf->Cell(50, 8, 'Project Performance Measures ', 0);


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Criteria', 1,0,'C');
$pdf->Cell(48, 8, 'Target', 1,0,'C');
$pdf->Cell(49, 8, 'Actual', 1,0,'C');
$pdf->Cell(45, 8, 'Variance', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Completion Date', 1,0,'C');
$pdf->Cell(48, 8, '', 1,0,'C');
$pdf->Cell(49, 8, '', 1,0,'C');
$pdf->Cell(45, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Project Cost', 1,0,'C');
$pdf->Cell(48, 8, '', 1,0,'C');
$pdf->Cell(49, 8, '', 1,0,'C');
$pdf->Cell(45, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Number of Accidents', 1,0,'C');
$pdf->Cell(48, 8, '', 1,0,'C');
$pdf->Cell(49, 8, '', 1,0,'C');
$pdf->Cell(45, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Others (please specify)', 1,0,'C');
$pdf->Cell(48, 8, '', 1,0,'C');
$pdf->Cell(49, 8, '', 1,0,'C');
$pdf->Cell(45, 8, '', 1,0,'C');

$pdf->Ln(10);
$pdf->Cell(50, 8, 'Construction Change Order Record', 0);


$pdf->Ln(8);
$pdf->Cell(65, 8, 'Reference No.
(Request for Change Order', 1,0,'C');
$pdf->Cell(62, 8, 'Description /Reason', 1,0,'C');
$pdf->Cell(65, 8, 'Date Approved', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(65, 8, '', 1,0,'C');
$pdf->Cell(62, 8, '', 1,0,'C');
$pdf->Cell(65, 8, '', 1,0,'C');


$pdf->Ln(10);
$pdf->Cell(50, 8, 'What were the major issues encountered?', 0);


$pdf->Ln(8);
$pdf->Cell(192, 30, '', 1,0,'C');


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
$pdf->Cell(70, 8, 'PROJECT COMPLETION REPORT', 0,'C');
$pdf->Ln(7);

$pdf->SetFont('Arial', 'B', 8);


$pdf->Ln(1);

$pdf->Cell(50, 8, 'Causes of variances?  Lessons learned?', 0);


$pdf->Ln(8);
$pdf->Cell(192, 40, '', 1,0,'C');

$pdf->Ln(41);
$pdf->Cell(50, 8, 'Other comments/improvements for next project (include developmental needs):', 0);

$pdf->Ln(8);
$pdf->Cell(192, 40, '', 1,0,'C');

$pdf->Ln(44);
$pdf->Cell(27,8,'Prepared by:',1);
$pdf->Cell(75,8,'',1,0,'C');
$pdf->Cell(15,8,'Date:',1);
$pdf->Cell(75,8,'',1,0,'C');


$pdf->Ln(8);
$pdf->Cell(27,8,'Reviewed by:',1);
$pdf->Cell(75,8,'',1,0,'C');
$pdf->Cell(15,8,'Date:',1);
$pdf->Cell(75,8,'',1,0,'C');



$pdf->Ln(10);
$pdf->Cell(50, 8, 'Attachments:', 0,0);
$pdf->Ln(8);
$pdf->Cell(192, 30, '', 1,0,'C');
$pdf->Output();
?>