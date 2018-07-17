<?php
	error_reporting(false);
	require("connection.php");
	
	$desc = $_GET["servDesc"];
	$id = $_GET["update"];
	$ac = $_GET["act"];
	
	$upd = "UPDATE serv_indvi_offer SET Serv_Prov_Serv_Descr ='$desc', Serv_Activation='$ac' WHERE Serv_Off_ID ='$id' ";
	$update = mysql_query( $upd, $conn);
	
	// echo "<script> window.location='.\./myserv.php' </script>";
?>