<?php
    include('../master/connect.php');

$id = $_POST['id'];
$mt_cat = trim($_POST['category']);
$mt_desc = trim($_POST['name']);





  $sql = "UPDATE materials SET category_id=?,material_name=? WHERE material_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($mt_cat,$mt_desc,$id));

$conn = null;

echo json_encode($output);
?>
