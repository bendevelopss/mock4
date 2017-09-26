<?php
    include('../master/connect.php');

  $id = $_POST['id'];

  $sql = "SELECT * FROM client WHERE client_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['client_id'], $fetch['client_company'],$fetch['client_person'],$fetch['client_personno'],$fetch['client_contact'],$fetch['client_address'],$fetch['client_email']);
  }
$conn = null;

echo json_encode($output);


    $output[] = array ();
?>
