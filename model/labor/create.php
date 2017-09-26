<?php
    include('../master/connect.php');

$type = trim($_POST['type']);
$name = trim($_POST['job']);

   $sql = "INSERT INTO labor(labor_id,category_id,labor_name,status) values((select lpad (no,6,'LB') from labor as lb where no = (select max(no) from labor as l)),?,?,?)";

  $q = $conn->prepare($sql);
  $q -> execute(array($type,$name,'active'));


$conn = null;

echo json_encode($output);
?>

