<?php
    include('../master/connect.php');

  $id = $_POST['id'];

  $sql = "SELECT * FROM labor WHERE labor_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['pay_item_code'],$fetch['part_code'], $fetch['description']);
  }
$conn = null;

echo json_encode($output);
?>