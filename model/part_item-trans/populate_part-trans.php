<?php
    include('../master/connect.php');
  $id = $_POST['cont_id'];


    $sql = "SELECT pt.part_id,part_desc from `part-trans` as pt,part as p where pt.part_id=p.part_id and  pt.contract_id=?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['part_id'],$fetch['part_desc']);
  }
$conn = null;

echo json_encode($output);
?>
