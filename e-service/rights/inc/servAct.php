<?php
	require("connection.php");
	$servP = $_POST["servP"]; // service provider
	$servID = $_POST["servOffID"]; // service offered id
	$servSID = $_POST["servID"]; // service id
	
	
	$updServ = "UPDATE serv_indvi_offer SET Serv_Activation='1' WHERE Serv_Off_ID = '$servID' ";
	$excUpd = mysql_query($updServ , $conn);
	
	$updSer = "UPDATE service SET Curr_of_User =Curr_of_User + 1 WHERE Serv_ID = '$servSID' ";
	$excUp = mysql_query($updSer , $conn);
	
	
	echo "<script> window.location='.\./servCheck.php' </script>";
	
?>