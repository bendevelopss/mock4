<?php
    include('../master/connect.php');

$user_id = trim($_POST['user_id']);
$emp_id = trim($_POST['emp_id']);
$user_name = trim($_POST['user_name']);
$user_pwd = trim($_POST['user_pass']);
$user_type = trim($_POST['user_type']);

//   $sql = "INSERT INTO user(user_id,name,user_name,user_pass,user_type,status) values(?,?,?,?)";
$sql= "INSERT INTO `user`(`user_id`, `emp_id`, `user_name`, `user_pass`, `user_type`, `status`) VALUES ((select lpad (no,6,'UI') from user as u1 where no = (select max(no) from user as u)),?,?,?,?,?)";
$q = $conn->prepare($sql);
$q -> execute(array($user_id,$emp_id,$user_name, $user_pwd, $user_type,'active'));


$conn = null;

echo json_encode($output);
?>
