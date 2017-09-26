<?php
    include('../master/connect.php');


  $sql = "SELECT * FROM categories where status='active' and description='equipment'  ORDER BY category_name desc";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['category_id'],$fetch['category_name']);

  }
$conn = null;

echo json_encode($output);
?>
