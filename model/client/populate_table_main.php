<?php
    include('../master/connect.php');


  $sql = "SELECT * from client where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['client_id'], $fetch['client_company'],$fetch['client_person'],$fetch['client_personno'],$fetch['client_contact'],$fetch['client_address'],$fetch['client_email']);
  }
$conn = null;

echo json_encode($output);
?>
