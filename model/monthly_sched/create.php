<?php
    include('../master/connect.php');

$mt_cat = trim($_POST['category']);
$mt_desc = trim($_POST['name']);






   $sql = "INSERT INTO materials(material_id,category_id,material_name,status) values((select lpad (no,6,'MT') from materials as mt where no = (select max(no) from materials as e)),?,?,?)";


  $q = $conn->prepare($sql);
  $q -> execute(array($mt_cat, $mt_desc,'active'));


$conn = null;

echo json_encode($output);
?>

