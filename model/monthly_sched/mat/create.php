<?php
    include('../../master/connect.php');

$item = trim($_POST['item']);
$bal = trim($_POST['bal']);
$prjted = trim($_POST['prjted']);
$desc = trim($_POST['desc']);
$dur = trim($_POST['dur']);
$w1 = trim($_POST['w1']);
$w2 = trim($_POST['w2']);
$w3 = trim($_POST['w3']);
$w4 = trim($_POST['w4']);
$w5 = trim($_POST['w5']);






   $sql = "INSERT INTO matreq(`matreq_id`, `pay_item_id`, `mat_balance`, `mat_projected`, `work_desc`, `duration`, `w1`, `w2`, `w3`, `w4`, `w5`, `status`) values((select lpad (no,6,'MR') from matreq as mt where no = (select max(no) from matreq as e)),?,?,?,?,?,?,?,?,?,?,?)";


  $q = $conn->prepare($sql);
  $q -> execute(array($item,$bal,$prjted ,$desc,$dur,$w1 ,$w2 ,$w3 ,$w4,$w5,'ACTIVE'));


$conn = null;

echo json_encode($output);
?>
