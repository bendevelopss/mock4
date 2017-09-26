<?php
    include('../master/connect.php');

$name = trim($_POST['job']);

   $sql = "INSERT INTO scope(scope_id,scope_name,status) values((select lpad (no,6,'SC') from scope as lb where no = (select max(no) from scope as l)),?,?)";



  $q = $conn->prepare($sql);
  $q -> execute(array($name,'active'));


$conn = null;

echo json_encode($output);
?>

