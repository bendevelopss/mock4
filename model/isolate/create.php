<?php
    include('../master/connect.php');

$ID = trim($_POST['ID']);
$name = trim($_POST['name']);
$contact = trim($_POST['contact']);
$add = trim($_POST['add']);
$email = trim($_POST['email']);

   $sql = "INSERT INTO employee(emp_id,name,contact,address,email,status) values(?,?,?,?,?,?)";

  $q = $conn->prepare($sql);
  $q -> execute(array($ID,$name,$contact,$add,$email,'active'));


$conn = null;

echo json_encode($output);
?>
