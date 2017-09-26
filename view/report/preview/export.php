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
$pdf->Cell(100, 8, 'DAILY ACCOMPLISHMENT REPORT', 0,'C');
$pdf->Ln(12);

$pdf->SetFont('Arial', 'B', 8);

$pdf->Cell(28, 10, 'Project Name:', 1);
$pdf->Cell(22	, 10, ' ', 1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 10, 'Date: '.date('d-m-Y').'', 1);
$pdf->Cell(15, 10, 'Day: ', 1);
$pdf->Cell(18, 10, ' ', 1);
$pdf->SetFont('Arial', '', 9);
$pdf->Ln(15);
$pdf->Cell(15, 8, 'Activities', 1);
$pdf->Cell(80, 8, 'Station', 1);
$pdf->Cell(35, 8, 'Volume', 1);
//$pdf->Cell(2, 8, '', 0);
$pdf->Cell(34, 8, 'Weather', 1);
$pdf->Cell(17, 8, 'Manpower', 1);
$pdf->Cell(11, 8, 'No.', 1);
//$pdf->Cell(25, 8, 'P. Distribuidor', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
//$engineer = mysql_query("SELECT * FROM engineer");
$item = 0;
$totaluni = 0;
$totaldis = 0;
//while($engineer2 = mysql_fetch_array($engineer)){
	$item = $item+1;
	//$totaluni = $totaluni + $productos2['precio_unit'];
	//$totaldis = $totaldis + $productos2['precio_dist'];
	$pdf->Cell(15, 8, $item, 1);
	$pdf->Cell(80, 8, '', 1);
	$pdf->Cell(35, 8, '', 1);
//	$pdf->Cell(2, 8, '', 0);
	$pdf->Cell(6, 8, 'AM', 1);
	$pdf->Cell(11, 8, '', 1);
	$pdf->Cell(6, 8, 'PM', 1);
	$pdf->Cell(11, 8, '', 1);
	//$pdf->Cell(25, 8, 'S/. '.$productos2['precio_dist'], 0);
	//$pdf->Ln(8);
//}
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(17,8,'',1);
$pdf->Cell(11,8,'1',1);
$pdf->Ln(8);
$pdf->Cell(130,8,'',0);
$pdf->Cell(51,8,'Toolbox Meeting Conducted?',1);
$pdf->Cell(11,8,'',1);

$pdf->Ln(10);
$pdf->Cell(65,8,'Materials/Lubricants/Fuel Used',1);
$pdf->Cell(34,8,'Quantity',1,0,'C');
$pdf->Cell(45,8,'Equipment Used',1,0,'C');
$pdf->Cell(48,8,'Utilization',1,0,'C');
$pdf->Ln(8);
$pdf->Cell(65,8,'',1);
$pdf->Cell(34,8,'',1,0,'C');
$pdf->Cell(45,8,'',1,0,'C');
$pdf->Cell(48,8,'',1,0,'C');

$pdf->Ln(8);
$pdf->Cell(65,8,'Materials/Equipments/Documents Received',1);
$pdf->Cell(34,8,'Quantity',1,0,'C');
$pdf->Cell(45,8,'Problems Encountered',1,0,'C');
$pdf->Cell(48,8,'Visitors',1,0,'C');
$pdf->Ln(8);
$pdf->Cell(65,8,'',1);
$pdf->Cell(34,8,'',1,0,'C');
$pdf->Cell(45,25,'',1,0,'C');
$pdf->Cell(48,25,'',1,0,'C');

$pdf->Ln(35);
$pdf->Cell(30,8,'Prepared by:',1);
$pdf->Cell(34,8,'',1,0,'C');

$pdf->Ln(8);
$pdf->Cell(30,8,'Approved by:',1);
$pdf->Cell(34,8,'',1,0,'C');

//$pdf->Cell(31,8,'Total Unitario: S/. '.$totaluni,0);
//$pdf->Cell(32,8,'Total Dist: S/. '.$totaldis,0);
$pdf->Output();
?>