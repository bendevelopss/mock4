<?php
    include('../master/connect.php');

  $sql = "select user_id, name, user_name, user_type, user.status from user, employee where employee.emp_id = user.emp_id and user.status = 'active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['user_id'],$fetch['name'],$fetch['user_name'], $fetch['user_type'],$fetch['status']);
  }
$conn = null;

echo json_encode($output);
?>
