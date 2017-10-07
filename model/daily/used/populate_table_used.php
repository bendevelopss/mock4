<?php
    include('../../master/connect.php');

$id = $_POST['id'];

  $sql = "SELECT * from dailymat where status='active' and cont_id=?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['description'], $fetch['station'],$fetch['qty']);
  }
$conn = null;

echo json_encode($output);
?>
