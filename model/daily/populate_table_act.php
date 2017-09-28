<?php
    include('../master/connect.php');


  // $sql = "SELECT * from activities where status='active'";
  $sql = " SELECT activities_id,a.pay_item_id,a.description,station,a.qty,(a.qty/pi.qty)*100 as done,pi.percent*(a.qty/pi.qty) as part from activities as a, pay_item as pi where a.pay_item_id=pi.pay_item_id"; 
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['description'],$fetch['pay_item_id'], $fetch['station'],$fetch['qty'],$fetch['done'],$fetch['part']);
  }
$conn = null;

echo json_encode($output);
?>
