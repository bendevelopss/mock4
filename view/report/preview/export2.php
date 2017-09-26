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
$pdf->Cell(40, 8, '', 0);
$pdf->Cell(70, 8, 'MONTHLY ACCOMPLISHMENT REPORT EVALUATION', 0,'C');
$pdf->Ln(7);

$pdf->SetFont('Arial', 'B', 8);


$pdf->Ln(1);
$pdf->Cell(50, 8, 'Project Name', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, 'Project Code', 1);

$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Project Location ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Agent/Client Name ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Contract Period ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Accomplishment cut-off date ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Start Date ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Target Completion Date ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
//$engineer = mysql_query("SELECT * FROM engineer");


$pdf->Ln(7);
$pdf->Cell(97,8,'Cost Details',1,0,'C');
$pdf->Cell(95,8,'Project Expenditures',1,0,'C');

$pdf->Ln(8);
$pdf->Cell(.001,8,'',1);
$pdf->Cell(25,8,'Project Cost:',1);
$pdf->Cell(5,8,'P',1);
$pdf->Cell(67,8,'',1);
//$pdf->Cell(50,8,'',0,0);
$pdf->Cell(37,8,'Projected',1,0,'C');
$pdf->Cell(5,8,'P',1);
$pdf->Cell(53,8,'',1);
$pdf->Ln(8);

$pdf->Cell(25,8,'Cost Change:',1);
$pdf->Cell(5,8,'P',1,0,'C');
$pdf->Cell(67,8,'',1,0,'C');
//$pdf->Cell(50,8,'',0,0,'C');
$pdf->Cell(37,8,'Actual:',1,0,'C');
$pdf->Cell(5,8,'P',1);
$pdf->Cell(53,8,'',1);
$pdf->Ln(8);
$pdf->Cell(25,8,'Addition',1);
$pdf->Cell(5,8,'( )',1,0,'C');
$pdf->Cell(17,8,'Deduction',1,0,'C');
$pdf->Cell(5,8,'( )',1,0,'C');
$pdf->Cell(45,8,'',0,0,'C');
$pdf->Cell(37,8,'Variance (+/-):',1,0,'C');
$pdf->Cell(5,8,'P',1);
$pdf->Cell(53,8,'',1);

$pdf->Ln(8);
$pdf->Cell(25,8,'Total Project Cost:',1);
$pdf->Cell(5,8,'P',1,0,'C');
$pdf->Cell(67,8,'',1,0,'C');


$pdf->Ln(8);
$pdf->Cell(97,8,'Percentage Accomplishment',1,0,'C');
$pdf->Cell(95,8,'Project Duration',1,0,'C');

$pdf->Ln(8);
$pdf->Cell(.001,8,'',1);
$pdf->Cell(25,8,'Schedule:',1);
$pdf->Cell(67,8,'',1);
$pdf->Cell(5,8,'%',1);
//$pdf->Cell(50,8,'',0,0);
$pdf->Cell(37,8,'Contract',1,0,'C');
$pdf->Cell(50,8,'',1);
$pdf->Cell(8,8,'days',1);
$pdf->Ln(8);

$pdf->Cell(25,8,'Actual:',1);
$pdf->Cell(67,8,'',1,0,'C');
$pdf->Cell(5,8,'%',1,0,'C');
//$pdf->Cell(50,8,'',0,0,'C');
$pdf->Cell(37,8,'Completed:',1,0,'C');
$pdf->Cell(50,8,'',1);
$pdf->Cell(8,8,'days',1);
$pdf->Ln(8);
$pdf->Cell(25,8,'Variance (+/-):',1);
$pdf->Cell(67,8,'',1,0,'C');
$pdf->Cell(5,8,'%',1,0,'C');
// /$pdf->Cell(5,8,'',0,0,'C');
//$pdf->Cell(45,8,'',0,0,'C');
$pdf->Cell(37,8,'Remaining:',1,0,'C');
$pdf->Cell(50,8,'',1);
$pdf->Cell(8,8,'days',1);

$pdf->Ln(8);
$pdf->Cell(97,8,'Equivalent in days:',1,0,'C');
//$pdf->Cell(21,8,'',0,0);
$pdf->Cell(37,8,'Granted time extension:',1,0,'C');
$pdf->Cell(50,8,'',1,0,'C');
$pdf->Cell(8,8,'days',1,0,'C');

$pdf->Ln(8);
$pdf->Cell(8,8,'( )',1,0,'C');
$pdf->Cell(16,8,'ahead:',1,0,'C');
$pdf->Cell(15,8,'',1);
$pdf->Cell(10,8,'days',1,0,'C');
$pdf->Cell(8,8,'( )',1,0,'C');
$pdf->Cell(15,8,'delay:',1,0,'C');
$pdf->Cell(15,8,'',1);
$pdf->Cell(10,8,'days',1,0,'C');

$pdf->Ln(12);
$pdf->Cell(71,8,'Activities Accomplished for the Month',1,0,'C');
$pdf->Cell(60,8,'Problems Encountered',1,0,'C');
$pdf->Cell(60,8,'Actions Taken',1,0,'C');
$pdf->Ln(8);
$pdf->Cell(71,20,'',1,0,'C');
$pdf->Cell(60,20,'',1,0,'C');
$pdf->Cell(60,20,'',1,0,'C');

$pdf->Ln(25);
$pdf->Cell(71,8,'Activities Accomplished for the Month',1,0,'C');
$pdf->Cell(60,8,'Problems Encountered',1,0,'C');
$pdf->Cell(60,8,'Actions Taken',1,0,'C');
$pdf->Ln(8);
$pdf->Cell(71,20,'',1,0,'C');
$pdf->Cell(60,20,'',1,0,'C');
$pdf->Cell(60,20,'',1,0,'C');

/*
$pdf->Ln(22);
$pdf->Cell(15, 8, 'Item No.', 1);
$pdf->Cell(35, 8, 'Work Description', 1,0,'C');
$pdf->Cell(15, 8, 'Unit', 1,0,'C');
$pdf->Cell(15, 8, 'Quantity', 1,0,'C');
$pdf->Cell(15, 8, 'Unit Cost', 1,0,'C');
$pdf->Cell(15, 8, 'Amount', 1,0,'C');
$pdf->Cell(15, 8, 'Weight (%)', 1,0,'C');
$pdf->Cell(15, 8, 'Unit', 1,0,'C');

*/
//$pdf->Cell(31,8,'Total Unitario: S/. '.$totaluni,0);
//$pdf->Cell(32,8,'Total Dist: S/. '.$totaldis,0);
$pdf->Output();
?>