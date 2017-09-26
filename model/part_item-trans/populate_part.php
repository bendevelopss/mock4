<?php
    include('../master/connect.php');


    $sql = "SELECT * from part";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {$output[] = array ($fetch['part_id'],$fetch['part_desc']);
  }
//$conn = null;

echo json_encode($output);
?>
