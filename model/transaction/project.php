<?php
    include('../master/connect.php');
    session_start();
    $_SESSION['clients']=$_POST['client'];
    $_SESSION['ref']=$_POST['ref'];
    $_SESSION['period']=$_POST['period'];
    $name=$_POST['name'];
    $code=$_POST['code'];
    $location=$_POST['location'];
    $contract=$_SESSION['cont_id'];
    $start=$_POST['start'];
    $award=$_POST['award'];
    $ntp=$_POST['ntp'];
    $target=$_POST['target'];


    $sql = "INSERT INTO project(proj_id,proj_name,proj_code,proj_location,contract_id,start_date,award_date,ntp_date,target_date,status) values((select lpad (no,6,'PJ') from project as pj where no = (select max(no) from project as p)),?,?,?,?,?,?,?,?,?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($name,$code,$location,$contract,$start,$award,$ntp,$target,'ACTIVE'));

  $conn = null;

  echo json_encode($output);

?>
