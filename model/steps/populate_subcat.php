<?php
    include('../master/connect.php');
$cat=$_POST['cat'];


  $sql = " SELECT * from subcategories as s,categories as c where s.category_id=c.category_id and s.status='active' and c.description ='equipment' and c.category_id=? group by s.subcat_name";

  $q = $conn->prepare($sql);
  $q -> execute(array($cat));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['subcat_id'],$fetch['subcat_name']);

  }

echo json_encode($output);

?>

