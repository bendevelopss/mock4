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
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(110, 8, 'PROJECT INFORMATION SHEET', 0,'C');
$pdf->Ln(7);

$pdf->SetFont('Arial', '', 9);

$pdf->Ln(2);
$pdf->Cell(50, 8, 'Project Information', 0,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, 'Project Name', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, '', 1);
$pdf->Cell(7, 8, '', 1,0,'C');
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
$pdf->Cell(50, 8, 'Client Contact Person/Number', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Contract Reference Number', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Contract Period', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(50, 8, 'Date of Award', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, 'Date of NTP', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, 'Target Date of Completion', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');


$pdf->Ln(15);
$pdf->Cell(50, 8, 'Project Team', 0,0,'C');
$pdf->Ln(8);
$pdf->Cell(50, 8, 'Operations Manager', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Project/ Field Manager', 1);
$pdf->Cell(7, 8, '', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Materials Engineer', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Foreman ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Warehouse In Charge ', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Equipment In Charge', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Safety Officer', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(50, 8, 'Timekeeper', 1);
$pdf->Cell(7, 8, ':', 1,0,'C');
$pdf->Cell(135, 8, '', 1,0,'C');

$pdf->Ln(11);
$pdf->Cell(35, 8, 'Subcontractors', 0,0,'C');
$pdf->Ln(8);
$pdf->Cell(15, 8, 'Name', 1,0,'C');
$pdf->Cell(25, 8, 'Contract Details', 1,0,'C');
$pdf->Cell(25, 8, 'Contract Amount', 1,0,'C');
$pdf->Cell(25, 8, 'Scope of Work', 1,0,'C');
$pdf->Cell(32, 8, 'Billing Schedules', 1,0,'C');
$pdf->Cell(35, 8, 'Contract Duration', 1,0,'C');
$pdf->Cell(35, 8, 'Number of Personnel', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(15, 8, '', 1,0,'C');
$pdf->Cell(25, 8, '', 1,0,'C');
$pdf->Cell(25, 8, '', 1,0,'C');
$pdf->Cell(25, 8, '', 1,0,'C');
$pdf->Cell(32, 8, ' ', 1,0,'C');
$pdf->Cell(35, 8, ' ', 1,0,'C');
$pdf->Cell(35, 8, '', 1,0,'C');

$pdf->Ln(11);
$pdf->Cell(35, 8, 'Consultants', 0,0,'C');
$pdf->Ln(8);
$pdf->Cell(45, 8, 'Name', 1,0,'C');
$pdf->Cell(47, 8, 'Company', 1,0,'C');
$pdf->Cell(50, 8, 'Contact Details', 1,0,'C');
$pdf->Cell(50, 8, 'Scope of Work', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(45, 8, '', 1,0,'C');
$pdf->Cell(47, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

//CONSULTA
//$engineer = mysql_query("SELECT * FROM engineer");
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
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(110, 8, 'PROJECT INFORMATION SHEET', 0,'C');
$pdf->Ln(7);


$pdf->SetFont('Arial', '', 9);
$pdf->Ln(1);
$pdf->Cell(45, 8, 'Equipments/ Tools Deployed', 0,0,'C');
$pdf->Ln(8);
$pdf->Cell(150, 8, 'Name', 1,0,'C');
$pdf->Cell(40, 8, 'Number of Units', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(150, 8, '', 1,0,'C');
$pdf->Cell(40, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(150, 8, '', 1,0,'C');
$pdf->Cell(40, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(150, 8, '', 1,0,'C');
$pdf->Cell(40, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(150, 8, '', 1,0,'C');
$pdf->Cell(40, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(150, 8, '', 1,0,'C');
$pdf->Cell(40, 8, '', 1,0,'C');

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
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(110, 8, 'PROJECT INFORMATION SHEET', 0,'C');
$pdf->Ln(7);


$pdf->SetFont('Arial', '', 9);
$pdf->Ln(1);
$pdf->Cell(45, 8, 'II. Mobilization Checklist', 0,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Checkpoint', 1,0,'C');
$pdf->Cell(10, 8, 'Yes', 1,0,'C');
$pdf->Cell(10, 8, 'No', 1,0,'C');
$pdf->Cell(10, 8, 'N/A', 1,0,'C');
$pdf->Cell(50, 8, 'Remarks', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Check Required Documents', 1,0,'C');
$pdf->Cell(80, 8, '', 0,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Project Information Sheet', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Notice to Proceed (NTP)', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Contract Agreement', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Performance Bond', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Project Specifications/Drawings', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Construction Schedule', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Manpower Utilization Schedule', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Equipment Utilization Schedule', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Materials Quantity Take-Off', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Safety and Health Program', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Quality Control Program ', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');


$pdf->Ln(8);
$pdf->Cell(110, 8, 'Check Required Manpower, Materials, Equipment:', 1,0,'C');
$pdf->Cell(80, 8, '', 0,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Complete Project Team', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'All needed project workers', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Heavy and Light  Equipment', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Tools', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Subcontractors', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Construction Schedule', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Suppliers', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Consultants', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Materials needed for the temporary facilities', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);


$pdf->Cell(110, 8, 'Temporary Facilities (as necessary):', 1,0,'C');
$pdf->Cell(80, 8, '', 0,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Planning of the Construction of Temporary facilities', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Location of the temporary facilities has been cleared', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Field Office', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Warehouse', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Motorpool (Repair and Parking Area)', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Bunk house/ Locker Room', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Toilet and Bathroom', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Kitchen, Dining, Washing Area', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Drinking Water Supply', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Water and Power Supply', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Environmental, Health & Safety Issues:', 1,0,'C');
$pdf->Cell(80, 8, '', 0,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Fire extinguishers', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Material Safety Data Sheets (MSDS) for chemicals', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Safety Signs and Barricades ', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'First Aid Kit', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Personal Protective Equipment (PPE)', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Forms (to be issued by the Document Controller):', 1,0,'C');
$pdf->Cell(80, 8, '', 0,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Project Implementation', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Purchasing', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Warehousing', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Equipment/Facilities Maintenance', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(110, 8, 'Document & Records Control', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Other Activities:', 1,0,'C');
$pdf->Cell(80, 8, '', 0,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Pre-construction Orientation', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(110, 8, 'Courtesy call to the local government', 1,0,'L');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(10, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');




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
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(110, 8, 'PROJECT INFORMATION SHEET', 0,'C');
$pdf->Ln(7);


$pdf->SetFont('Arial', '', 9);
$pdf->Ln(1);
$pdf->Cell(20, 8, '', 0,0,'C');
$pdf->Cell(45, 8, 'III. Pre-Construction Orientation', 0,0,'C');
$pdf->Ln(8);
$pdf->Cell(70, 8, 'Agenda', 0,0,'C');
$pdf->Ln(8);
$pdf->Cell(70, 8, '( )', 0,0,'C');
$pdf->Cell(50, 8, 'Project Information Sheet', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(70, 8, '( )', 0,0,'C');
$pdf->Cell(50, 8, 'Introduction of Project Team Members', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(70, 8, '( )', 0,0,'C');
$pdf->Cell(50, 8, 'Discussion of Project Schedule', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(70, 8, '( )', 0,0,'C');
$pdf->Cell(50, 8, 'Report Submission Schedule/ Inspection Schedule', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(70, 8, '( )', 0,0,'C');
$pdf->Cell(50, 8, 'Quality Policy', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(70, 8, '( )', 0,0,'C');
$pdf->Cell(50, 8, 'Safety/Environmental Guidelines', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(70, 8, '( )', 0,0,'C');
$pdf->Cell(50, 8, 'House Rules', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(70, 8, '( )', 0,0,'C');
$pdf->Cell(50, 8, 'Use of Forms', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(70, 8, '( )', 0,0,'C');
$pdf->Cell(50, 8, 'Other matters (pls. specify)', 0,0,'L');
$pdf->Ln(8);
$pdf->Cell(70, 25, '', 0,0,'C');
$pdf->Cell(95, 25, '', 1,0,'C');
$pdf->Ln(27);
$pdf->Cell(5, 8, '', 0,0,'C');
$pdf->Cell(40, 8, 'Date Conducted:', 1,0,'C');
$pdf->Cell(30, 8, '', 1,0,'C');
$pdf->Ln(10);
$pdf->Cell(5, 8, '', 0,0,'C');
$pdf->Cell(40, 8, 'Conducted by:', 1,0,'C');
$pdf->Cell(120, 8, '', 1,0,'C');

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
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(110, 8, 'PROJECT INFORMATION SHEET', 0,'C');
$pdf->Ln(7);

$pdf->SetFont('Arial', '', 9);
$pdf->Ln(1);
$pdf->Cell(20, 8, '', 0,0,'C');
$pdf->Cell(45, 8, 'IV. Report Submission Schedule', 0,0,'C');
$pdf->Ln(8);
$pdf->Cell(45, 8, 'Report Title/Type', 1,0,'C');
$pdf->Cell(50, 8, 'Frequency of Submission', 1,0,'C');
$pdf->Cell(50, 8, 'Assigned Person', 1,0,'C');
$pdf->Cell(45, 8, 'To be Submitted to', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(45, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Cell(45, 8, '', 1,0,'C');

$pdf->Ln(16);
$pdf->Cell(13, 8, '', 0,0,'C');
$pdf->Cell(45, 8, 'V. Inspection Schedule', 0,0,'C');
$pdf->Ln(8);
$pdf->Cell(45, 8, 'Inspection Type', 1,0,'C');
$pdf->Cell(50, 8, 'Frequency', 1,0,'C');
$pdf->Cell(50, 8, 'Responsibility', 1,0,'C');
$pdf->Cell(45, 8, 'Records/Output', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(45, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Cell(50, 8, '', 1,0,'C');
$pdf->Cell(45, 8, '', 1,0,'C');

$pdf->Output();
?>