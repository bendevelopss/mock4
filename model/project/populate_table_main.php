<?php
    include('../master/connect.php');


  $sql = "SELECT * from project AS P,proj_team as pt where P.contract_id=pt.contract_id and P.status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
  $team =array (['opt_mgr'=> $fetch['opt_mgr'], 'field_engr'=> $fetch['field_engr'], 'mtrls_engr'=> $fetch['mtrls_engr'], 'foreman'=> $fetch['foreman'], 'wrh_incharge'=> $fetch['wrh_incharge'], 'eqpt_incharge'=> $fetch['eqpt_incharge'], 'safety_officer'=> $fetch['safety_officer'], 'timekeeper'=> $fetch['timekeeper']]);

    $output[] = array (
      'contract_id'=> $fetch['contract_id'],
      'proj_name'=> $fetch['proj_name'],
      'proj_team'=> $team);
      
    //contract view
  }
$conn = null;

echo json_encode($output);
?>
