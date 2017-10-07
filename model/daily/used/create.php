<?php
    include('../master/connect.php');

$desc = trim($_POST['desc']);
$qty = trim($_POST['qty']);


   $sql = "INSERT INTO dailymat(dmat_id,description,qty,`date`,status) values((select lpad (no,6,'EQ') from dailymat as e1 where no = (select max(no) from dailymat as e)),?,?,?,?)";

  $q = $conn->prepare($sql);
  $q -> execute(array($ID,$name,$contact,$add,$email,'active'));


$conn = null;

echo json_encode($output);
?>
