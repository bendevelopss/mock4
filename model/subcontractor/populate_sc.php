<?php
    include('../master/connect.php');


  $sql = "SELECT * FROM scope where status ='active'";
  $q = $conn->prepare($sql);          
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['scope_id'],$fetch['scope_name']);				 	
  }         
$conn = null;             

echo json_encode($output);
?>    
