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
$pdf->Cell(70, 8, 'CUSTOMER SATISFACTION SURVEY', 0,'C');
$pdf->Ln(7);

$pdf->SetFont('Arial', 'B', 9);


$pdf->Ln(1);
$pdf->Cell(50, 8, 'Project Name', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, 'Project Code', 1);

$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Implementing Agency', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');
$pdf->Ln(8);

$pdf->Ln(8);
$pdf->Cell(192, 40, '', 1,0);
$pdf->Ln(1);
$pdf->Cell(195, 8, 'It is important to us to learn what aspects of the project worked well and where we can make improvements on our process.', 0,0);
$pdf->Ln(4);
$pdf->Cell(195, 8, 'To do that, we need to know your experience and insights thru this survey. ', 0,0);

$pdf->Ln(6);
$pdf->Cell(195, 8, 'This information will be used to improve our company. Where appropriate we may follow-up with you for additional ', 0,0);
$pdf->Ln(4);
$pdf->Cell(195, 8, 'information or clarification into your feedback. Please help us do the service you deserve - the best possible!', 0,0);

$pdf->Ln(6);
$pdf->Cell(195, 8, 'Please use the following ratings:', 0,0);

$pdf->Ln(9);
$pdf->Cell(195, 8, '1 = Poor		2 = Fair		3 = Good	4 = Excellent', 0,0);

$pdf->Ln(16);
$pdf->Cell(162, 8, 'Criteria', 1,0,'C');
$pdf->Cell(30, 8, 'Score', 1,0,'C');

$pdf->Ln(8);

$pdf->Cell(162, 22, '1.	Project was completed within the established budget with minimal change orders.', 1,0);
$pdf->Cell(30, 22, '', 1,0,'C');
$pdf->Ln(13);

$pdf->Cell(25, 9, '   Comments:', 1,0);
$pdf->Cell(137, 9, '   ', 1,0);

$pdf->Ln(9);

$pdf->Cell(162, 22, '2.	Project was completed within the established schedule. If the schedule changed - delays were ', 1,0);
$pdf->Cell(30, 31, '', 1,0,'C');
$pdf->Ln(13);
$pdf->Cell(25, 9, 'communicated/explained to us:', 0,0);
$pdf->Ln(9);

$pdf->Cell(25, 9, '   Comments:', 1,0);
$pdf->Cell(137, 9, '   ', 1,0);

$pdf->Ln(9);

$pdf->Cell(162, 22, '3.	Persan Construction, Inc. demonstrated expertise for the specialties of the project. We are ', 1,0);
$pdf->Cell(30, 31, '', 1,0,'C');
$pdf->Ln(13);
$pdf->Cell(25, 9, 'satisfied with the quality of craftsmanship provided by Persan Construction, Inc.:', 0,0);
$pdf->Ln(9);

$pdf->Cell(25, 9, '   Comments:', 1,0);
$pdf->Cell(137, 9, '   ', 1,0);

$pdf->Ln(9);

$pdf->Cell(162, 22, '4.	Persan Construction, Inc. kept all members of the project team informed throughout the project', 1,0);
$pdf->Cell(30, 22, '', 1,0,'C');
$pdf->Ln(13);


$pdf->Cell(25, 9, '   Comments:', 1,0);
$pdf->Cell(137, 9, '   ', 1,0);

$pdf->Ln(9);

$pdf->Cell(162, 22, '5.	Persan Construction, Inc. was familiar with the requirements of various agencies (Fire Bureau, ', 1,0);
$pdf->Cell(30, 31, '', 1,0,'C');
$pdf->Ln(13);
$pdf->Cell(25, 9, 'Local Codes, etc.). Persan Construction, Inc. complies with the regulatory requirements
', 0,0);
$pdf->Ln(9);

$pdf->Cell(25, 9, '   Comments:', 1,0);
$pdf->Cell(137, 9, '   ', 1,0);




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
$pdf->Cell(70, 8, 'CUSTOMER SATISFACTION SURVEY', 0,'C');
$pdf->Ln(7);

$pdf->SetFont('Arial', 'B', 9);


$pdf->Ln(1);


$pdf->Cell(162, 22, '6.	Submittals were clear, concise and easy to read.', 1,0);
$pdf->Cell(30, 22, '', 1,0,'C');
$pdf->Ln(13);

$pdf->Cell(25, 9, '   Comments:', 1,0);
$pdf->Cell(137, 9, '   ', 1,0);

$pdf->Ln(9);

$pdf->Cell(162, 22, '7.	Persan Construction, Inc. made recommendations that resulted in lower construction costs or a ', 1,0);
$pdf->Cell(30, 31, '', 1,0,'C');
$pdf->Ln(13);
$pdf->Cell(25, 9, 'reduction in operating expenses.', 0,0);
$pdf->Ln(9);

$pdf->Cell(25, 9, '   Comments:', 1,0);
$pdf->Cell(137, 9, '   ', 1,0);

$pdf->Ln(9);

$pdf->Cell(162, 22, '8.	Incomplete project issues were resolved in a timely manner during punchlist and closeout.', 1,0);
$pdf->Cell(30, 22, '', 1,0,'C');
$pdf->Ln(13);


$pdf->Cell(25, 9, '   Comments:', 1,0);
$pdf->Cell(137, 9, '   ', 1,0);

$pdf->Ln(9);

$pdf->Cell(162, 22, '9.	Construction during the project was inspected to ensure quality work.', 1,0);
$pdf->Cell(30, 22, '', 1,0,'C');
$pdf->Ln(13);


$pdf->Cell(25, 9, '   Comments:', 1,0);
$pdf->Cell(137, 9, '   ', 1,0);

$pdf->Ln(9);

$pdf->Cell(162, 22, '10.	Persan Construction, Inc. personnel were courteous and professional.', 1,0);
$pdf->Cell(30, 22, '', 1,0,'C');
$pdf->Ln(13);

$pdf->Cell(25, 9, '   Comments:', 1,0);
$pdf->Cell(137, 9, '   ', 1,0);

$pdf->Ln(9);
$pdf->Cell(130, 15, '', 0,0,'R');
$pdf->Cell(32, 15, 'TOTAL SCORE:', 0,0,'R');
$pdf->Cell(30, 15, '', 1,0,'C');
$pdf->Ln(13);


$pdf->Ln(9);
$pdf->Cell(30, 10, 'Rater Name', 1,0,'L');
$pdf->Cell(80, 10, '', 1,0);
$pdf->Cell(20, 10, 'Position', 1,0);
$pdf->Cell(62, 10, '', 1,0);
$pdf->Ln(10);
$pdf->Cell(30, 10, 'Signature', 1,0,'L');
$pdf->Cell(80, 10, '', 1,0);
$pdf->Cell(20, 10, 'Date', 1,0);
$pdf->Cell(62, 10, '', 1,0);

$pdf->Ln(15);
$pdf->Cell(192, 18, '', 1,0,'L');
$pdf->Ln(2);
$pdf->Cell(30, 10, 'FINAL RATING', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(192, 10, '10-15 = Poor		        16-25 = Fair	      	26-34 = Good		    35-40 = Excellent', 0,0);

$pdf->Output();
?>