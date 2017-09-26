<?php
    include('../master/connect.php');

$id = $_POST['id'];
$type = trim($_POST['category']);

  $sql = "UPDATE categories SET category_name=?  WHERE category_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($type,$id));


$conn = null;

echo json_encode($output);
?>
