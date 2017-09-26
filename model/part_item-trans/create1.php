<?php
    include('../master/connect.php');

$contract_id = trim($_POST['id']);
$part_id = trim($_POST['category']);
$percent = trim($_POST['type']);

   $sql = "INSERT INTO `part-trans`(part_id,contract_id,percent,progress) values(?,?,?,?)";



  $q = $conn->prepare($sql);
  $q -> execute(array($part_id,$contract_id,$percent,0));


$conn = null;

echo json_encode($output);
?>
