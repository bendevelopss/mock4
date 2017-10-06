<?php
    include('../master/connect.php');


  $sql = "
SELECT material_id,material_name,category_name FROM materials as m, categories as c where m.status = 'active' and m.category_id=c.category_id ORDER BY material_name desc
";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['material_id'], $fetch['material_name'],$fetch['category_name'],$fetch['unit_name'],$fetch['rate']);



  }
$conn = null;

echo json_encode($output);
?>
 