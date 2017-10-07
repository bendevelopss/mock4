<?php
    include('../master/connect.php');


  $sql = "SELECT contract_id FROM contract where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
//  $test = [['project_name'=> 'project1', 'project_no'=> '1'],['project_name'=> 'project2', 'project_no'=>'2']];
  foreach($browse as $fetch)
  {
  $output[] = array(
      'contract_id'=> $fetch['contract_id'],
      //'scope_project'=> $test
  );
  }

  $conn = null;

echo json_encode($output);
?>
