<?php
    include('../master/connect.php');


$company = trim($_POST['name']);
$contactc = trim($_POST['contactc']);
$email = trim($_POST['email']);
$person = trim($_POST['person']);
$contactp = trim($_POST['contactp']);
$address = trim($_POST['address']);

   $sql = "INSERT INTO client(client_id,client_company,client_person,client_personno,client_contact,client_address,client_email,status) values((select lpad (no,8,'CLI-') from client as cl where no = (select max(no) from client as p)),?,?,?,?,?,?,'active')";

  $q = $conn->prepare($sql);
  $q -> execute(array($company,$person,$contactp,$contactc,$address,$email));

$conn = null;

echo json_encode($output);

?>

