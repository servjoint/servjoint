<?php
	if( isset($_COOKIE["serv"]) && isset($_COOKIE["joint"]) )
	{
		require("connection.php");
		$username2 = $_COOKIE["serv"];
		$id = $_GET["s"];
		$username = $_GET["u"];
	
		if($username2 == $username)
		{
			$check = "Select * from serv_indvi_offer WHERE Service_ID=$id and Serv_Provider='$username' ";
			$go = mysql_query( $check , $conn);
	
			if(mysql_num_rows($go) == 0 )
			{
				$servS = "Select * from service WHERE Serv_ID='$id' ";
				$goS = mysql_query( $servS , $conn);
				
				$rowSe = mysql_fetch_array($goS);
				$serDesc = $rowSe["Serv_Description"];
				$serName = $rowSe["Serv_Name"];
				if(!$goS){
					echo "<script> alert('Something went wrong connecting to the service. Please Report The Problem') </script>";
					echo "<script> window.location='.\./dashboard.php'</script>";
				}else{
					// add a new service for the user
					$servInsert = "INSERT INTO serv_indvi_offer(Serv_Desc,Serv_Activation,Service_ID,Serv_Provider)VALUES('$serDesc','0','$id','$username') ";
					$exc = mysql_query( $servInsert , $conn);
					echo "<script> window.location='.\./myserv.php'</script>";
				}
				
				
			}else{
				echo "<script> alert('Your Are Already Registered To The Service') </script>";
				echo "<script> window.location='.\./myserv.php'</script>";
			}
		}else{
			echo "<script> alert('Please Logon To Continue') </script>";
			echo "<script> window.location='.\./dashboard.php'</script>";
		}
		
	}else{
			echo "<script> alert('Please Logon To Continue') </script>";
			echo "<script> window.location='.\./dashboard.php'</script>";
		}
	
?>