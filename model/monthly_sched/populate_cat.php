<?php
    include('../master/connect.php');


  $sql = "SELECT * FROM categories where description='material' and status ='active'";
  $q = $conn->prepare($sql);          
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['category_id'],$fetch['category_name']);				 	
  }         
$conn = null;             

echo json_encode($output);
?>    
