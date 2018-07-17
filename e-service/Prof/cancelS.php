<?php
	
	if( isset($_COOKIE["serv"]) && isset($_COOKIE["joint"]) )
	{
		require("inc/connection.php");
		$username2 = $_COOKIE["serv"];
		
		$id = $_GET["s"];
		$username = $_GET["i"];
	
		if($username2 == $username)
		{
			$servD ="DELETE FROM serv_indvi_offer WHERE Serv_Off_ID='$id'";
			$goD = mysql_query( $servD , $conn);
			if($goD){
				 echo "<script> window.location='dashboard.php'</script>";
			}else{
				echo "<script> alert('Something went wrong connecting to the service. Please Report The Problem') </script>";
				echo "<script> window.location='dashboard.php' </script>";
			}
			
		}else
		{
			echo "<script> alert('Illegal Logon, Please Logon Again') </script>";
			echo "<script> window.location='.\./log.php' </script>";
		}
		
	}else
	{
		echo "<script> alert('Please Logon To Continue') </script>";
		echo "<script> window.location='dashboard.php' </script>";
	}


?>