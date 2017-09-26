<?php
     include('../master/connect.php');
 
 $id = $_POST['cont_id'];

   $sql = "SELECT pay_item_code,p.part_code,description,percent,qty,progress FROM pay_item as pi,part as p where p.part_id=pi.part_id and pi.status = 'active' and pi.contract_id=? GROUP BY  pay_item_id ORDER BY pay_item_id desc";
 
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
     foreach($browse as $fetch)
   {
     $output[] = array ($fetch['pay_item_code'],$fetch['part_code'], $fetch['description'], $fetch['percent'], $fetch['qty'], $fetch['progress']);
   }
$conn = null;

echo json_encode($output);
?>