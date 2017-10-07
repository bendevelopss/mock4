<?php
    include('../../master/connect.php');


  $sql = "
SELECT `eqptreq_id`, `eqpt_id`, `qty`, `duration`, `w1`, `w2`, `w3`, `w4`, `w5` FROM `eqptreq` WHERE status='active'
";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['eqptreq_id'], $fetch['eqpt_id'],$fetch['qty'],$fetch['duration'],$fetch['w1'],$fetch['w2'],$fetch['w3'],$fetch['w4'],$fetch['w5']);



  }
$conn = null;

echo json_encode($output);
?>
 