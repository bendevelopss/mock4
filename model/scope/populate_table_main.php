<?php
    include('../master/connect.php');


  $sql = "SELECT * FROM scope where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
//  $test = [['project_name'=> 'project1', 'project_no'=> '1'],['project_name'=> 'project2', 'project_no'=>'2']];
  foreach($browse as $fetch)
  {
  $output[] = array(
      'scope_id'=> $fetch['scope_id'],
      'scope_name'=> $fetch['scope_name'],
      //'scope_project'=> $test
  );
  }
  
  $conn = null;

echo json_encode($output);
?>
