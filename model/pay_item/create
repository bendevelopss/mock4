<?php
     include('../master/connect.php');
 
 $code = trim($_POST['code']);
 $desc = trim($_POST['desc']);
 $part = trim($_POST['part']);
 
    $sql = "INSERT INTO pay_item(pay_item_id,pay_item_code,part_id,description,status) values((select lpad (no,6,'PI') from pay_item as lb where no = (select max(no) from pay_item as l)),?,?,?,?)";
 
   $q = $conn->prepare($sql);
   $q -> execute(array($code,$part,$desc,'active'));
 
 
 $conn = null;
 
 echo json_encode($output);
 ?>
 