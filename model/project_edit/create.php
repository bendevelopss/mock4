<?php
    include('../master/connect.php');

$ID = trim($_POST['ID']);
$name = trim($_POST['name']);
$job = trim($_POST['job']);

   $sql = "INSERT INTO engineer(engr_id,engr_name,engr_type,status) values(?,?,?,?)";

  $q = $conn->prepare($sql);
  $q -> execute(array($ID,$name,$job,'active'));


$conn = null;

echo json_encode($output);
?>

