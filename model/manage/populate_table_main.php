<?php
    include('../master/connect.php');

<<<<<<< HEAD
$sql = "select user_id, name, user_name, user_type, user.status from user, employee where employee.emp_id = user.emp_id and user.status = 'active'";
=======

  $sql = "SELECT * from user where status='active'";
>>>>>>> 386b3a6561ea6513bd9490af6ee919c6f5576d9f
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
<<<<<<< HEAD
    $output[] = array ($fetch['user_id'],$fetch['name'],$fetch['user_name'], $fetch['user_type'],$fetch['status']);
=======
    $output[] = array ($fetch['user_id'],$fetch['user_name'], $fetch['user_type'],$fetch['status']);
>>>>>>> 386b3a6561ea6513bd9490af6ee919c6f5576d9f
  }
$conn = null;

echo json_encode($output);
?>
