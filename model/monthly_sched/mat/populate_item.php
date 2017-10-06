<?php
    include('../../master/connect.php');

 $id = $_POST['id'];

  $sql =   $sql = "SELECT pay_item_id,pay_item_code,p.part_desc,p.part_code,description,percent,qty FROM pay_item as pi,part as p where pi.`part-trans_id`=p.part_id and pi.status = 'active' and pi.contract_id=? GROUP BY  pay_item_id ORDER BY part_code asc";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['pay_item_id'], $fetch['mat_balance'],$fetch['mat_projected'],$fetch['work_desc'],$fetch['duration'],$fetch['w1'],$fetch['w2'],$fetch['w3'],$fetch['w4'],$fetch['w5']);



  }
$conn = null;

echo json_encode($output);
?>
 
