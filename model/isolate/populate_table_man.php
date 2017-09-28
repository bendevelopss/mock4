<?php
    include('../master/connect.php');


  $sql = "SELECT * from activities where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['description'], $fetch['station'],$fetch['qty']);
  }
$conn = null;

echo json_encode($output);
?>
