<?php
    include('../master/connect.php');

$id = $_POST['id'];
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$contact = trim($_POST['contact']);
$address = trim($_POST['add']);




  $sql = "UPDATE employee SET name=?,contact=?,address=?,email=?  WHERE emp_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($name,$contact,$address,$email,$id));

$conn = null;

echo json_encode($output);
?>
