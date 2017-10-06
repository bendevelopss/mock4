<?php
    include('../master/connect.php');

  $id = $_POST['id'];
  $sql = "SELECT user_id, e.emp_id, user_name, user_pass, user_type FROM user as u, employee as e WHERE user_id = ? and u.emp_id = e.emp_id";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['user_id'], $fetch['emp_id'], $fetch['user_name'],$fetch['user_pass'],$fetch['user_type']);
  }
$conn = null;

echo json_encode($output);
?>
