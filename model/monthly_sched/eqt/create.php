<?php
    include('../../master/connect.php');

$qty = trim($_POST['qty']);
$desc = trim($_POST['desc']);
$dur = trim($_POST['dur']);
$w1 = trim($_POST['w1']);
$w2 = trim($_POST['w2']);
$w3 = trim($_POST['w3']);
$w4 = trim($_POST['w4']);
$w5 = trim($_POST['w5']);




   $sql = 'INSERT INTO `eqptreq`( `eqptreq_id`, `eqpt_id`, `qty`, `duration`, `w1`, `w2`, `w3`, `w4`, `w5`, `status`) values((select lpad (no,6,"EQ") from eqptreq as mt where no = (select max(no) from eqptreq as e)),?,?,?,?,?,?,?,?,?)';
  $q = $conn->prepare($sql);
  $q -> execute(array($desc,$qty,$dur,$w1 ,$w2 ,$w3 ,$w4,$w5,'ACTIVE'));
 

$conn = null;

echo json_encode($output);
?>


