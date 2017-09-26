<?php
     include('../master/connect.php');
 
 $id = trim($_POST['id']);
 $code = trim($_POST['code']);
 $desc = trim($_POST['desc']);
 $pert = trim($_POST['pert']);
 $amnt = trim($_POST['amnt']);
 $part = trim($_POST['part']);
 
    $sql = "INSERT INTO pay_item(pay_item_id,contract_id,pay_item_code,part_id,description,percent,qty,progress,status) values((select lpad (no,6,'PI') from pay_item as lb where no = (select max(no) from pay_item as l)),?,?,?,?,?,?,?,?)";
 
   $q = $conn->prepare($sql);
   $q -> execute(array($id,$code,$part,$desc,$pert,$amnt,0,'active'));
 
 
 $conn = null;
 
 echo json_encode($output);
 ?>
 
