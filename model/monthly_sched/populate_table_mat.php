<?php
    include('../master/connect.php');


  $sql = "
SELECT `matreq_id`, `material_id`, `mat_balance`, `mat_projected`, `work_desc`, `duration`, `w1`, `w2`, `w3`, `w4`, `w5` FROM `matreq` WHERE status='active'
";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['material_id'], $fetch['mat_balance'],$fetch['mat_projected'],$fetch['work_desc'],$fetch['duration'],$fetch['w1'],$fetch['w2'],$fetch['w3'],$fetch['w4'],$fetch['w5']);



  }
$conn = null;

echo json_encode($output);
?>
 