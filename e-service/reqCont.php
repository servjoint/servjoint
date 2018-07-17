<?php
	$serv_in_id = $_POST["nr"];
	$scc = $_POST["id"];
	$prov = $_POST["province"];
	$cty = $_POST["city"];
	$serv = $_POST["service"];
	
	
	setcookie($scc,$scc,time()+(60*60),"/");
	include("inc/connection.php");
	error_reporting(false);
	$upd = "UPDATE serv_indvi_offer SET cont_request =cont_request+1 WHERE Serv_Off_ID='$serv_in_id ' ";
	$excv = mysql_query($upd, $conn);
	
	echo "<script> window.location='services.php?city=$cty&service=$serv&search=search&provice=$prov' </script>";
	
?>