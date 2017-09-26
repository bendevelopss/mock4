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
$pdf->Cell(100, 8, 'SAFETY INSPECTION CHECKLIST', 0,'C');
$pdf->Ln(12);

$pdf->SetFont('Arial', '', 9);

$pdf->Cell(35, 8, 'Project Code:', 1);
$pdf->Cell(65, 8, ' ', 1);

$pdf->Cell(15, 8, 'Month:', 1);
$pdf->Cell(77, 8, ' ', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, 'Location:', 1);
$pdf->Cell(65, 8, ' ', 1);
$pdf->Cell(15, 8, 'Client:', 1);
$pdf->Cell(77, 8, ' ', 1);
$pdf->Ln(8);


$pdf->Cell(35, 8, 'Conducted By:', 1);
$pdf->Cell(65, 8, ' ', 1);
$pdf->Cell(15, 8, 'Date:', 1);
$pdf->Cell(77, 8, ' ', 1);
$pdf->Ln(8);


$pdf->Cell(35, 8, 'Acknowledged By:', 1);
$pdf->Cell(157, 8, ' ', 1);

$pdf->Ln(12);
$pdf->Cell(35, 8, 'Status*', 1,0,'C');
$pdf->Cell(100, 8, 'Checklist', 1,0,'C');
$pdf->Cell(57, 8, 'Remarks', 1,0,'C');

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Office trailer with power, secure site location and neat?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Storage trailer(s) or Warehouse, secure site location and neat?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Injury records being kept? Injury handling procedures established?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Temp power for construction and equipment?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Telephone, fax line & dedicated computer line? ', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Sanitary facilities are well maintained?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Water available? (drinking, testing, dust control, personal use ).', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Site communications ( radios, etc.).', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Office equipment ( telephone, fax machine, copier, etc. ).', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Office furnishings ( desk, chairs, filing cabinet, print table, etc. )', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Permits/licenses/Certificate of Insurance', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Nail, boards, debris removed?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Regular disposal of wastes? Waste containers provided?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Warnings signs and safety signs complete and posted?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Hazard lights utilized?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Delivery address and unloading point for material.', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Safety needs ( please check first aid kits, medical facilities location)', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Open ditches, drop offs protected? Ladders lowered?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'MSDS for received hazardous wastes? Control/disposal established?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Fire extinguishers available and inspected?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Flammable liquids in secure container/storage?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Established equipment fueling method (turn off/grounded)?', 1);
$pdf->Cell(57, 8, '', 1);

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
$pdf->Cell(100, 8, 'SAFETY INSPECTION CHECKLIST', 0,'C');
$pdf->Ln(12);

$pdf->SetFont('Arial', '', 9);
$pdf->Ln(12);
$pdf->Cell(35, 8, 'Status*', 1,0,'C');
$pdf->Cell(100, 8, 'Checklist', 1,0,'C');
$pdf->Cell(57, 8, 'Remarks', 1,0,'C');
$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'PPEs adequate and utilized? (face, head, eye, hand, foot protection)?', 1);
$pdf->Cell(57, 8, '', 1);


$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Safety orientations conducted to all employees', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Equipment had undergone preventive maintenance?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Materials properly stored/stacked? Inventories updated?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Proper tool being used? Stored after use? Grounded properly?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'All operators qualified? Complies with local laws and ordinances?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Roads sidewalks protected? Adjacent structures properly shored?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Barricades or covers installed?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Excavation barricaded and lighting provided?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Seat belts available? Lights, brakes, warning signals operative?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Oily rag containers used and emptied daily at garage/repair shops?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'Adequate lighting and ventilation for repair shop and warehouse?', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 1);
$pdf->Cell(100, 8, 'OTHERS:', 1);
$pdf->Cell(57, 8, '', 1);

$pdf->Ln(8);
$pdf->Cell(35, 8, '', 0);
$pdf->Cell(100, 8, '*Y=Compliant, NI= Needs Improvement, N=Non-Compliant, N/A= Not Applicable', 0,0,'C');
$pdf->Cell(57, 8, '', 0);
$pdf->Output();
?>