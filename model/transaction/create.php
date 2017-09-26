<?php
    include('../master/connect.php');
    $_SESSION['clients']=$_POST['client'];



  $sql = " SELECT * from subcategories" ;
  $q = $conn->prepare($sql);
  $q -> execute(array($cat));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['subcat_id']);

  }
  echo json_encode($output);

?>
