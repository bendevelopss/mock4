<?php
    include('../master/connect.php');


  $sql = "SELECT pt.part_id,p.part_desc,pt.percent,pt.progress from `part-trans` as pt,part as p where  pt.part_id=p.part_id and pt.contract_id='16E00021'  ";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['part_id'],$fetch['part_desc'],$fetch['percent'],$fetch['progress']);
  }
$conn = null;

echo json_encode($output);
?>
