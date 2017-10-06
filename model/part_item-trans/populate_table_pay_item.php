<?php
    include('../master/connect.php');


    $sql = "SELECT pt.pay_item_id,p.part_id,pay_item_code,description,qty,progress FROM `pay_item-trans` as pt,pay_item as p WHERE pt.status ='active' and pt.pay_item_id=p.pay_item_id group by pay_item_id";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  $output[] = array ($fetch['pay_item_id'],$fetch['pay_item_code'],$fetch['part_id'],$fetch['description'],$fetch['qty'],$fetch['progresss']);
  {
  }
$conn = null;

echo json_encode($output);
?>
