<?php
    include('../master/connect.php');

  $id = $_POST['id'];

  $sql = "SELECT * FROM subcontractor WHERE subcon_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['subcon_id'], $fetch['subcon_comp_name'], $fetch['subcon_person'], $fetch['subcon_personno'], $fetch['subcon_comp_contact'],$fetch['scope_id']);
  }
$conn = null;



echo json_encode($output);
?>
