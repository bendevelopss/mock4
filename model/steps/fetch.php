<?php
    include('../master/connect.php');

  $id = $_POST['id'];

  $sql = "SELECT * FROM equipment WHERE eqpt_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['category_id'], $fetch['subcat_id'], $fetch['eqpt_name'], $fetch['model'], $fetch['cp_size'], $fetch['plate_no'], $fetch['serial_no'],$fetch['unit_id'],$fetch['rate']);
  }
$conn = null;

echo json_encode($output);
?>

