<?php
    include('../master/connect.php');

$id = $_POST['id'];

  $sql = "UPDATE engineer SET status = 'inactive' WHERE engr_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));

$conn = null;

echo json_encode($output);
?>
