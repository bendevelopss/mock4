<?php
    include('../master/connect.php');

$id = $_POST['id'];

  $sql = "UPDATE subcontractor SET status = 'inactive' WHERE subcon_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));

$conn = null;

echo json_encode($output);
?>
