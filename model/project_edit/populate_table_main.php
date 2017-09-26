<?php
    include('../master/connect.php');


  $sql = "SELECT * from contract where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['contract_id'], $fetch['contract_name'],$fetch['client_id'],$fetch['contract_refnum'],$fetch['contract_amt']);
  }
$conn = null;

echo json_encode($output);
?>
