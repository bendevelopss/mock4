<?php
    include('../master/connect.php');

    $emp_id = trim($_POST['ID']);
    $user_id = trim($_POST['user']);
    $user_name = trim($_POST['user_name']);
    $user_pwd = trim($_POST['user_pass']);
    $user_type = trim($_POST['user_type']);
    $contract_id = trim($_POST['contract_id']);



//  $sql = "UPDATE user SET user_name=?,user_pass=?,user_type=?,contract_id=?  WHERE user_id = ?";
  $sql ="UPDATE user SET emp_id=?, user_name=?,user_pass=?,user_type=?,contract_id=? WHERE user_id = ?";

  $q = $conn->prepare($sql);
  $q -> execute(array($emp_id,$user_name,$user_pwd,$user_type,$contract_id,$user_id));

$conn = null;

echo json_encode($output);
?>
