<?php
    include('../master/connect.php');

$user_id = $_POST['id'];

  $sql = "UPDATE user SET status = 'Inactive' WHERE user_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($user_id));

$conn = null;

echo json_encode($output);
?>
