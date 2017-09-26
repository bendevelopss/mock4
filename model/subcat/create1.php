<?php
    include('../master/connect.php');

$type = trim($_POST['subcategory']);
$category=trim($_POST['category']);
$desc = trim($_POST['type']);




   $sql = "INSERT INTO subcategories(subcat_id,category_id,subcat_name,description,status) values((select lpad (no,6,'SB') from subcategories as sb where no = (select max(no) from subcategories as s)),?,?,?,?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($category,$type,$desc,'active'));


$conn = null;

echo json_encode($output);
?>


