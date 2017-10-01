<?php
    include('../master/connect.php');

  $id = $_POST['id'];
  $sql = "SELECT * FROM employee WHERE emp_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ( $fetch['name'],$fetch['contact'],$fetch['address'],$fetch['email']);
  }
$conn = null;

echo json_encode($output);
?>
