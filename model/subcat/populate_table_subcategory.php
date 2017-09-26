<?php
    include('../master/connect.php');
$type=$_POST['types'];


  $sql = "SELECT * FROM subcategories as s,categories as c where c.status='active' and c.description=? and s.category_id=c.category_id group by subcat_id";
  $q = $conn->prepare($sql);
  $q -> execute(array($type));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['subcat_id'],$fetch['subcat_name'],$fetch['category_name'],$fetch['description']);

  }
$conn = null;

echo json_encode($output);
?>
