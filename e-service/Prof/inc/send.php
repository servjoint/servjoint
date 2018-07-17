<?php
	error_reporting(false);
	$msg = $_POST["msg"];
	$from = $_POST["from"];
	$to = $_POST["to"];
	$username = $_COOKIE["serv"];
	
	if($username == $from)
	{
		require("connection.php");
		$sendMsg = "INSERT INTO message(Message,Status,MsgTo,MsgFrom) VALUES('$msg','1','$to','$from')";
		$send = mysql_query($sendMsg, $conn);

		if($send)
		{
			echo "<script> window.location='.\./feednews.php' </script>";
		}else{
			echo "<script> alert('An Error Occured While Sending Message') </script>";
			echo "<script> window.location='.\./feednews.php' </script>";			
		}
		
	}else{
		
	}
	
?>