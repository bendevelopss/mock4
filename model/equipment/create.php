<?php
    include('../master/connect.php');

$type = trim($_POST['equip_type']);
$cat = trim($_POST['equip_cat']);
$name = trim($_POST['name']);






  $sql = "INSERT INTO equipment(eqpt_id,subcat_id,category_id,eqpt_name,status) values((select lpad (no,6,'EQ') from equipment as e1 where no = (select max(no) from equipment as e)),?,?,?,?)";

  $q = $conn->prepare($sql);
  $q -> execute(array($type,$cat,$name,'active'));


$conn = null;

echo json_encode($output);
?>
