<?php
    include('../master/connect.php');


  $sql = "SELECT labor_id,c.category_name,labor_name FROM labor as l,categories as c where l.status = 'active' and l.category_id=c.category_id  ORDER BY labor_name desc";
//    $sql = "SELECT * FROM LABOR where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['labor_id'], $fetch['category_name'],$fetch['labor_name']);
  }
$conn = null;

echo json_encode($output);
?>
