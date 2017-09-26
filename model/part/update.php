<?php
    include('../master/connect.php');

$id = $_POST['id'];
$code = trim($_POST['code']);
$desc = trim($_POST['desc']);


  $sql = "UPDATE part SET  part_code=?,part_desc=? WHERE part_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($code,$desc,$id));

$conn = null;

echo json_encode($output);
?>
	