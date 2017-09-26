<?php
    include('../master/connect.php');


    $sql = "SELECT subcon_id,subcon_comp_name,subcon_person,subcon_personno,subcon_comp_contact,scope_name from subcontractor as s,scope as sc where sc.status='active' and s.scope_id=sc.scope_id group by subcon_id order by subcon_comp_name";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['subcon_id'], $fetch['subcon_comp_name'], $fetch['subcon_person'], $fetch['subcon_personno'], $fetch['subcon_comp_contact'],$fetch['scope_name']);
  }
$conn = null;

echo json_encode($output);
?>
