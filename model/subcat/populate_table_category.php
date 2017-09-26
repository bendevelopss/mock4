<?php
    include('../master/connect.php');
$type=$_POST['types'];


  $sql = "SELECT * FROM categories where status='active' and description=?";
  $q = $conn->prepare($sql);
  $q -> execute(array($type));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['category_id'],$fetch['category_name'],$fetch['description']);

  }
$conn = null;

echo json_encode($output);
?>
