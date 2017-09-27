<?php
     include('../master/connect.php');
 
 $id = $_POST['cont_id'];

   $sql = "SELECT pay_item_id,pay_item_code,p.part_desc,p.part_code,description,percent,qty,progress FROM pay_item as pi,part as p where p.part_id=pi.part_id and pi.status = 'active' and pi.contract_id=? GROUP BY  pay_item_id ORDER BY part_code asc";
 
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
     foreach($browse as $fetch)
   {
     $output[] = array ($fetch['pay_item_id'],$fetch['part_code'],$fetch['part_desc'], $fetch['description'], $fetch['percent'], $fetch['qty'], $fetch['progress']);
   }
$conn = null;

echo json_encode($output);
?>