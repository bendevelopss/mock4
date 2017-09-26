<?php
    include('../master/connect.php');


  $sql = "SELECT * from users where user_stat='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['user_name'], $fetch['user_pass'],$fetch['user_type']);
  }
$conn = null;

echo json_encode($output);
?>

