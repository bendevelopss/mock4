<?php
    include('../master/connect.php');
    $id = $_POST['id'];
    $name = trim($_POST['sub']);
    $personno = trim($_POST['personno']);
    $person = trim($_POST['person']);
    $contact = trim($_POST['contact']);
    $scope = trim($_POST['scope']);

  $sql = "UPDATE subcontractor SET  subcon_comp_name=?, subcon_person=?, subcon_personno=? , subcon_comp_contact=?,scope_id=?  WHERE subcon_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($name,$person,$personno,$contact,$scope,$id));

$conn = null;

echo json_encode($output);
?>
