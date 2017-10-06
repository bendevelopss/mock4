<?php
    include('../master/connect.php');

$contract_id = trim($_POST['contract_id']);

   $sql = "INSERT INTO contract(contract_id,status) values(?,?)";



  $q = $conn->prepare($sql);
  $q -> execute(array($contract_id,'active'));


$conn = null;

echo json_encode($output);
?>
