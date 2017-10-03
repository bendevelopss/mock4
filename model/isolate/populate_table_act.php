<?php
    include('../master/connect.php');


  // $sql = "SELECT * from activities where status='active'";
  $sql = " SELECT activities_id,a.pay_item_id,a.description,station,a.qty,(a.qty/pi.qty)*100 as done,pi.percent*(a.qty/pi.qty) as part,p.percent,p.percent*(pi.percent*(a.qty/pi.qty))/100 as partadd,pi.part_id from activities as a, pay_item as pi,`part-trans` as p where a.pay_item_id=pi.pay_item_id and p.contract_id=16E00021 GROUP by activities_id

"; 
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['description'],$fetch['pay_item_id'], $fetch['station'],$fetch['qty'],$fetch['done'],$fetch['part'],$fetch['partadd'],$fetch['part_id']);
  }
$conn = null;

echo json_encode($output);



?>


