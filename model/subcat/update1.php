<?php
    include('../master/connect.php');

$id = $_POST['id'];
$type = trim($_POST['subcategory']);
$category=trim($_POST['category']);

  $sql = "UPDATE subcategories SET subcat_name=?,category_id=?  WHERE subcat_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($type,$category,$id));


$conn = null;

echo json_encode($output);
?>
