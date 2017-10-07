<?php
    include('../master/connect.php');

$emp_id = trim($_POST['ID']);
$user_name = trim($_POST['user_name']);
$user_pwd = trim($_POST['user_pass']);
$user_type = trim($_POST['user_type']);
$contract_id = trim($_POST['contract_id']);


$sql= "INSERT INTO `user`(`user_id`, `emp_id`, `user_name`, `user_pass`, `user_type`,`contract_id`, `status`) VALUES ((select lpad (no,6,'UI') from user as u1 where no = (select max(no) from user as u)),?,?,?,?,?,?)";
$q = $conn->prepare($sql);
$q -> execute(array($emp_id,$user_name, $user_pwd, $user_type, $contract_id,'active'));


$conn = null;

echo json_encode($output);
?>
