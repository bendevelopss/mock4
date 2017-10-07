<?php
    include('../master/connect.php');


  $sql = "SELECT * FROM contract where status ='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['contract_id']);				 	
  }
$conn = null;

echo json_encode($output);
?>
