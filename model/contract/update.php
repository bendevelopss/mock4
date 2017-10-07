<?php
    include('../master/connect.php');

$id = $_POST['id'];



  $sql = "UPDATE contract SET contract_id=? where contract_id =?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id,$id));

$conn = null;

echo json_encode($output);
?>
