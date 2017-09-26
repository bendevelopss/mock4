<?php
    include('../master/connect.php');

$code = trim($_POST['code']);
$desc = trim($_POST['desc']);

   $sql = "INSERT INTO part(part_id,part_code,part_desc,status) values((select lpad (no,6,'PT') from part as pt where no = (select max(no) from part as p)),?,?,?)";



  $q = $conn->prepare($sql);
  $q -> execute(array($code,$desc,'active'));


$conn = null;

echo json_encode($output);
?>

