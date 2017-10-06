<?php
    include('../master/connect.php');

$id = $_POST['id'];
$type = trim($_POST['equip_type']);
$cat = trim($_POST['equip_cat']);
$name = trim($_POST['name']);


  $sql = "UPDATE equipment SET category_id=?,subcat_id=?,eqpt_name=? WHERE eqpt_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($cat,$type,$name,$id));


$conn = null;

echo json_encode($output);
?>

