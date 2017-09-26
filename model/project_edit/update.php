<?php
    include('../master/connect.php');

$id = $_POST['id'];
$name = trim($_POST['name']);
$job = trim($_POST['job']);
$email = trim($_POST['email']);
$contact = trim($_POST['contact']);
$address = trim($_POST['address']);




  $sql = "UPDATE engineer SET engr_name=?,engr_type=?  WHERE engr_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($name,$job,$id));

$conn = null;

echo json_encode($output);
?>
	