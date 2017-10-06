<?php
    include('../master/connect.php');

$name = trim($_POST['contract_id']);

   $sql = "INSERT INTO contract(contract_id,status) values(?,?)";



  $q = $conn->prepare($sql);
  $q -> execute(array($name,'active'));


$conn = null;

echo json_encode($output);
?>
