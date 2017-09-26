<?php
    include('../master/connect.php');

$name = trim($_POST['sub']);
$personno = trim($_POST['personno']);
$person = trim($_POST['person']);
$contact = trim($_POST['contact']);
$scope = trim($_POST['scope']);

   $sql = "INSERT INTO subcontractor(subcon_id,subcon_comp_name,subcon_person,subcon_personno,subcon_comp_contact,scope_id,status) values((select lpad (no,6,'SB') from subcontractor as ct where no = (select max(no) from subcontractor as c)),?,?,?,?,?,?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($name,$person,$personno,$contact,$scope,'active'));


$conn = null;

echo json_encode($output);
?>
