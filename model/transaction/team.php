<?php
    include('../master/connect.php');
    session_start();
    $om=$_POST['om'];
    $pi=$_POST['pi'];
    $time=$_POST['time'];
    $Safety=$_POST['Safety'];
    $EIC=$_POST['EIC'];
    $Warehouse=$_POST['Warehouse'];
    $Foreman=$_POST['Foreman'];
    $mat=$_POST['mat'];
    $cont_id=$_POST['cont_id'];
    //$period=$_POST['period'];


    $sql = "INSERT INTO proj_team(team_id,contract_id,opt_mgr,field_engr,mtrls_engr,foreman,wrh_incharge,eqpt_incharge,safety_officer,timekeeper,status) values((select lpad (no,6,'TM') from proj_team as pt where no = (select max(no) from proj_team as p)),?,?,?,?,?,?,?,?,?,?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($cont_id,$om,$pi,$mat,$Foreman,$Warehouse,$EIC,$Safety,$time,'ACTIVE'));

  $conn = null;

  echo json_encode($output);

?>
