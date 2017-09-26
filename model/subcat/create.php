<?php
    include('../master/connect.php');

$category = trim($_POST['category']);
$desc = trim($_POST['type']);





 
  $sql = "INSERT INTO categories(category_id,category_name,description,status) values((select lpad (no,6,'CT') from categories as ct where no = (select max(no) from categories as c)),?,?,?)";

  $q = $conn->prepare($sql);
  $q -> execute(array($category,$desc,'active'));


$conn = null;

echo json_encode($output);
?>

