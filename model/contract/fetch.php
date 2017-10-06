<?php
    include('../master/connect.php');

  $id = $_POST['id'];

  $sql = "SELECT contract_id FROM contract WHERE contract_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
   $output[] = array(
      'contract_id'=> $fetch['contract_id']
  );
  }
$conn = null;

echo json_encode($output);
?>
