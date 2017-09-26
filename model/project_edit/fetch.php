<?php
    include('../master/connect.php');

  $id = $_POST['id'];
  $sql = "SELECT * FROM engineer WHERE engr_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['engr_id'], $fetch['engr_name'],$fetch['engr_type']);
  }
$conn = null;

echo json_encode($output);
?>
