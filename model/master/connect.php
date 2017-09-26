<?php
      $conn = new PDO("mysql:host=localhost;dbname=mock3-new;","root","");
	  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

	ini_set('display_errors',1);
	error_reporting(E_ALL &~ E_NOTICE);
?>
