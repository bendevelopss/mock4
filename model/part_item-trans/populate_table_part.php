<?php
    include('../master/connect.php');
  $id = $_POST['cont_id'];


$sql = "SELECT * from (SELECT pt.`part-trans_id`,part_code,p.part_desc,pt.percent,pt.progress FROM `part-trans` as pt,part as p, pay_item as pi where pt.contract_id=? and pt.`part-trans_id`=p.part_id group by `part-trans_id`)as a JOIN (select pis.`part-trans_id`,SUM(pis.percent) as cent  from pay_item as pis,`part-trans` as pts WHERE pis.contract_id=? and pis.`part-trans_id` = pts.`part-trans_id` GROUP by `part-trans_id`)as b on b.`part-trans_id`=a.`part-trans_id`";




  $q = $conn->prepare($sql);
  $q -> execute(array($id,$id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['part-trans_id'],$fetch['part_code'],$fetch['part_desc'],$fetch['percent'],$fetch['cent'],$fetch['progress']);
  }
$conn = null;

echo json_encode($output);
?>
