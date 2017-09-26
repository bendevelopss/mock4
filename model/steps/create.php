<?php
    include('../master/connect.php');

$type = trim($_POST['equip_type']);
$cat = trim($_POST['equip_cat']);
$name = trim($_POST['name']);
$model = trim($_POST['model']);
$size = trim($_POST['size']);
$plate = trim($_POST['plate']);
$serial = trim($_POST['serial']);






  $sql = "INSERT INTO equipment(eqpt_id,subcat_id,category_id,eqpt_name,model,serial_no,cp_size,plate_no,status) values((select lpad (no,6,'EQ') from equipment as e1 where no = (select max(no) from equipment as e)),?,?,?,?,?,?,?,?)";

  $q = $conn->prepare($sql);
  $q -> execute(array($type,$cat,$name,$model,$serial,$size,$plate,'active'));


$conn = null;

echo json_encode($output);
?>
