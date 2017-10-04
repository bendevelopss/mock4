<?php
    include('../master/connect.php');
  $id = $_POST['cont_id'];


    $sql = "SELECT pt.`part-trans_id`,part_desc,part_code from `part-trans` as pt,part as p where pt.`part-trans_id`=p.part_id and  pt.contract_id=?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['part-trans_id'],$fetch['part_desc'],$fetch['part_code']);
  }
$conn = null;

echo json_encode($output);
?>
