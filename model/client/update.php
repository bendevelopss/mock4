<?php
    include('../master/connect.php');

$id = $_POST['id'];
$company = trim($_POST['name']);
$contactc = trim($_POST['contactc']);
$email = trim($_POST['email']);
$person = trim($_POST['person']);
$contactp = trim($_POST['contactp']);
$address = trim($_POST['address']);

  $sql = "UPDATE client SET client_company=?,client_person=?,client_personno=?, client_contact=? , client_address=? , client_email=? WHERE client_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($company,$person,$contactp,$contactc,$address,$email,$id));

$conn = null;

echo json_encode($output);
?>
