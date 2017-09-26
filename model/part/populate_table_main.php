<?php
    include('../master/connect.php');


    $sql = "SELECT * FROM part where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['part_id'],$fetch['part_code'],$fetch['part_desc']);
  }
$conn = null;

echo json_encode($output);
?>
