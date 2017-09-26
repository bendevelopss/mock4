<?php
    include('../master/connect.php');

  $id = $_POST['id'];

  $sql = "SELECT * FROM part WHERE part_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['part_code'],$fetch['part_desc']);
  }
$conn = null;

echo json_encode($output);
?>
