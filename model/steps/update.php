<?php
    include('../master/connect.php');

$id = $_POST['id'];
$type = trim($_POST['equip_type']);
$cat = trim($_POST['equip_cat']);
$name = trim($_POST['name']);
$model = trim($_POST['model']);
$size = trim($_POST['size']);
$plate = trim($_POST['plate']);
$serial = trim($_POST['serial']);


  $sql = "UPDATE equipment SET category_id=?,subcat_id=?,eqpt_name=?,model=?,cp_size=?,plate_no=?,serial_no=?  WHERE eqpt_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($cat,$type,$name,$model,$size,$plate,$serial,$id));


$conn = null;

echo json_encode($output);
?>

