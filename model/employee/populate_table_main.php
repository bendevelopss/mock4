<?php
    include('../master/connect.php');


  $sql = "SELECT * from employee where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['emp_id'], $fetch['name'],$fetch['contact'],$fetch['address'],$fetch['email']);
  }
$conn = null;

echo json_encode($output);
?>
