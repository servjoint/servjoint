<?php
	require("inc/connection.php");
	error_reporting(false);
	
	$msg = $_POST["reply"];
	$msgFK = $_POST["msgID_Num"];
	$replyTo = $_POST["msgName"];
	$user = $_COOKIE["sjcom"];
	
	$insTable = "INSERT INTO message(Message, Status, MsgTo, MsgFrom, reply) VALUES('$msg','1','$replyTo','$user','$msgFK')";
	$exec = mysql_query( $insTable , $conn);
	
	echo "<script> window.location='feednews.php' </script>";
	
?>