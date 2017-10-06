<?php
    include('../../master/connect.php');

$mt_cat = trim($_POST['category']);
$mt_desc = trim($_POST['name']);






   $sql = "INSERT INTO matreq(pay_item_id,category_id,material_name,status) values((select lpad (no,6,'MR') from matreq as mt where no = (select max(no) from matreq as e)),?,?,?)";


  $q = $conn->prepare($sql);
  $q -> execute(array($mt_cat, $mt_desc,'active'));


$conn = null;

echo json_encode($output);
?>

