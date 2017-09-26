<?php
    include('../master/connect.php');


  $sql = "SELECT eqpt_id,eqpt_name,c.category_name,s.subcat_name FROM equipment as e,categories as c,subcategories as s where e.status='active' and e.category_id=c.category_id and e.subcat_id=s.subcat_id  group by eqpt_name ORDER BY eqpt_name desc";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['eqpt_id'],$fetch['eqpt_name'],$fetch['category_name'],$fetch['subcat_name']);

  }
$conn = null;

echo json_encode($output);
?>
 