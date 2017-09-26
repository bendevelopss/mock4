<?php
    include('../master/connect.php');
$desc = trim($_POST['type']);

  $sql = "SELECT * FROM categories where description=? and status='active'";
  $q = $conn->prepare($sql);          
  $q -> execute(array($desc));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['category_id'],$fetch['category_name']);					 	
  }         
$conn = null;             

echo json_encode($output);

?>    
