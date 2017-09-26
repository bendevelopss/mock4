<?php
    include('../master/connect.php');

$id = $_POST['id'];

  $sql = "UPDATE scope SET status = 'inactive' WHERE scope_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));

$conn = null;

echo json_encode($output);
?>
