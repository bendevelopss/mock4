<?php
    include('../master/connect.php');


   $sql = "SELECT * from progress where contract_id='16E00021' "; 
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
$string = $fetch['expected'];
$parts = explode( '-', $string );
    $output[]= $parts;
}
$conn = null;

echo json_encode($output);
?>
