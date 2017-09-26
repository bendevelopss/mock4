<?php
    include('../master/connect.php');

$id = $_POST['id'];
$type = trim($_POST['type']);
$name = trim($_POST['job']);
$unit = trim($_POST['unit']);
$rate = trim($_POST['rate']);


  $sql = "UPDATE scope SET  scope_name=? WHERE scope_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($name,$id));

$conn = null;

echo json_encode($output);
?>
	