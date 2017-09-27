<?php
    include('../master/connect.php');
  $id = $_POST['cont_id'];


    // $sql = "SELECT pt.part_id,part_code,p.part_desc,percent,progress FROM `part-trans` as pt,part as p where contract_id=? and pt.part_id=p.part_id group by part_id";
$sql = "SELECT pt.part_id,part_code,p.part_desc,pt.percent,(select SUM(percent)  from pay_item WHERE contract_id=? and part_id = pt.part_id GROUP by part_id) as cent,pt.progress FROM `part-trans` as pt,part as p, pay_item as pi where pt.contract_id=? and pt.part_id=p.part_id group by part_id";


  $q = $conn->prepare($sql);
  $q -> execute(array($id,$id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['part_id'],$fetch['part_code'],$fetch['part_desc'],$fetch['percent'],$fetch['cent'],$fetch['progress']);
  }
$conn = null;

echo json_encode($output);
?>
