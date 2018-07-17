<?php

	require("inc/connection.php");
	error_reporting(false);
	
	$username = $_POST["txtUsername"];
	$password = $_POST["txtPassword"];
	
	strtolower($username);
	
	// Individual Users
	$selc = "Select * from service_provider where Username = '$username' ";
	$iquery = mysql_query( $selc, $conn );
	
	// Company users
	$cselc = "Select * from company_provider where Comp_ID = '$username' ";
	$cquery = mysql_query( $cselc, $conn );

	// admin rights users
	$aselc = "Select * from adminstr where email ='$username'";
	$aquery = mysql_query( $aselc, $conn );

	
	if( mysql_num_rows($iquery) == 1 ) // Individual validation
	{
		$irow = mysql_fetch_array($iquery);
		
		if($irow["Username"] == $username & $irow["Current_Password"] == $password)
		{
			setcookie("serv",$irow["Username"],time()+(60*30),"/"); // 30min
			setcookie("joint",$irow["Current_Password"],time()+(60*30),"/"); // 30min
				
			echo "<script> window.location='./Prof/dashboard.php' </script>";
		}
		else
			{
				if(isset($_COOKIE["Acc_Lock"] ) )
			{
				if($_COOKIE["Acc_Lock"] == 1 )
					
				{
					setcookie("Acc_Lock",2,time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
					
				}
				else if($_COOKIE["Acc_Lock"] == 2) 
				{
					setcookie("Acc_Lock","Lock",time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
					
				}
				else if($_COOKIE["Acc_Lock"] == "Lock")
				{
				
				}
				
			} else {
				setcookie("Acc_Lock",1,time()+(60*15),"/");
				echo "<script> window.location='/e-service/log.php' </script>";
			}
			
			} // end of else
		
	} // end of individual service_provider if statement 
	else if( mysql_num_rows($cquery) == 1 ) // Company validation
	{
		
		
		
		
		
	}
	else if( mysql_num_rows($aquery) == 1 ) // Admin validation
	{
		$arow = mysql_fetch_array($aquery);
				
				if($arow["email"] == $username && $arow["Pass"] == $password)
			{
				setcookie("sjcom",$arow["email"],time()+(60*30),"/");
				setcookie("ervoint",$arow["Pass"],time()+(60*30),"/");
				
				echo "<script> window.location='./rights/dashboard.php' </script>";
			
			}
			else
			{
				if(isset($_COOKIE["Acc_Lock"] ) )
			{
				if($_COOKIE["Acc_Lock"] == 1 )
					
				{
					setcookie("Acc_Lock",2,time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
					
				}
				else if($_COOKIE["Acc_Lock"] == 2) 
				{
					setcookie("Acc_Lock","Lock",time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
					
				}
				else if($_COOKIE["Acc_Lock"] == "Lock")
				{
				
				}
				
			} else {
				setcookie("Acc_Lock",1,time()+(60*15),"/");
				echo "<script> window.location='/e-service/log.php' </script>";
			}
			}
	}else {
			
			if(isset($_COOKIE["Acc_Lock"] ) )
			{
				if($_COOKIE["Acc_Lock"] == 1 )
					
				{
					setcookie("Acc_Lock",2,time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
					
				}
				else if($_COOKIE["Acc_Lock"] == 2) 
				{
					setcookie("Acc_Lock","Lock",time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
					
				}
				else if($_COOKIE["Acc_Lock"] == "Lock")
				{
				
				}
				
			} else {
				setcookie("Acc_Lock",1,time()+(60*15),"/");
				echo "<script> window.location='/e-service/log.php' </script>";
			}
	}
	
	/* 
	if( mysql_num_rows($iquery) == 0 )
	{
	
		
		if( mysql_num_rows($cquery) == 0 )	// if company provider row is 0 (no results) 
		{
			strtolower($username);
			echo "</br>comp is wrong";
			echo "</br>Username: ".$username."</br>";
			$aselc = "Select * from adminstr where email ='$username'";
			$aquery = mysql_query( $aselc, $conn );
			
			if( mysql_num_rows($aquery) == 0 )
			{
				echo "</br>admin is wrong";
				
				if(isset($_COOKIE["Acc_Lock"] ) )
			{
				if($_COOKIE["Acc_Lock"] == 1 )
					
			{
					setcookie("Acc_Lock",2,time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
					
			}else if($_COOKIE["Acc_Lock"] == 2) 
				{
					setcookie("Acc_Lock","Lock",time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
					
			}else if($_COOKIE["Acc_Lock"] == "Lock")
				{
				
			}
				} else {
					setcookie("Acc_Lock",1,time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
				}
			}else{ // if Admin Username is right
			
				$arow = mysql_fetch_array($aquery);
				
				if($arow["email"] == $username && $arow["Pass"] == $password)
			{
				setcookie("sjcom",$arow["ID_Number"],time()+(60*30),"/");
				setcookie("ervoint",$arow["Current_Password"],time()+(60*30),"/");
				
				echo "<script> alert('cookie is set') </script>";
				echo "<script> window.location='./rights/dashboard.php' </script>";
			
			} 	else 	{
				
						if(isset($_COOKIE["Acc_Lock"] ) )
						{
						if($_COOKIE["Acc_Lock"] == 1 )
						{
							setcookie("Acc_Lock",2,time()+(60*15),"/");
							echo "<script> window.location='/e-service/log.php' </script>";
						}	else if($_COOKIE["Acc_Lock"] == 2) 
						{
							setcookie("Acc_Lock","Lock",time()+(60*15),"/");
							echo "<script> window.location='/e-service/log.php' </script>";
						}	else if($_COOKIE["Acc_Lock"] == "Lock")
						{
				
						}
						} 	else 	{
							setcookie("Acc_Lock",1,time()+(60*15),"/");
							echo "<script> window.location='/e-service/log.php' </script>";
						}
					}
				
				} // end of admin validation
			
			// if username of company provider is wrong
			
				if(isset($_COOKIE["Acc_Lock"] ) )
			{
				if($_COOKIE["Acc_Lock"] == 1 )
			{
					setcookie("Acc_Lock",2,time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
			}else if($_COOKIE["Acc_Lock"] == 2) 
				{
					setcookie("Acc_Lock","Lock",time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
			}else if($_COOKIE["Acc_Lock"] == "Lock")
				{
				
			}
				} else {
					setcookie("Acc_Lock",1,time()+(60*15),"/");
					echo "<script> window.location='/e-service/log.php' </script>";
				}
			
			
			}else{ // if Company Provider is right
				$crow = mysql_fetch_array($cquery);
				
				if($crow["Comp_ID"] == $username && $crow["Password"] == $password)
			{
				setcookie("sjcom",$crow["ID_Number"],time()+(60*60*60*7),"/");
				setcookie("ervoint",$crow["Current_Password"],time()+(60*60*60*7),"/");
				
				echo "<script> window.location='./Prof/dashboard.php' </script>";
			
			} else {
					if(isset($_COOKIE["Acc_Lock"] ) )
					{
					if($_COOKIE["Acc_Lock"] == 1 )
					{
						setcookie("Acc_Lock",2,time()+(60*15),"/");
					}else if($_COOKIE["Acc_Lock"] == 2) 
					{
						setcookie("Acc_Lock","Lock",time()+(60*15),"/");
					}else if($_COOKIE["Acc_Lock"] == "Lock")
					{
				
					}
					} else {
						setcookie("Acc_Lock",1,time()+(60*15),"/");
						echo "<script> window.location='/e-service/log.php' </script>";
					}
				}
				
			}
		
		
	
	} else { // if Service Provider is right
	
		$row = mysql_fetch_array($iquery);
		
			if($row["ID_Number"] == $username && $row["Current_Password"] == $password)
			{
				setcookie("sjcom",$row["ID_Number"],time()+(60*60*60*7),"/");
				setcookie("ervoint",$row["Current_Password"],time()+(60*60*60*7),"/");
				
				echo "<script> window.location='./Prof/dashboard.php' </script>";
			
			} else {
					if(isset($_COOKIE["Acc_Lock"] ) )
					{
					if($_COOKIE["Acc_Lock"] == 1 )
					{
						setcookie("Acc_Lock",2,time()+(60*15),"/");
					}else if($_COOKIE["Acc_Lock"] == 2) 
					{
						setcookie("Acc_Lock","Lock",time()+(60*15),"/");
					}else if($_COOKIE["Acc_Lock"] == "Lock")
					{
				
					}
					} else {
						setcookie("Acc_Lock",1,time()+(60*15),"/");
						echo "<script> window.location='/e-service/log.php' </script>";
					}
				}
		
	} 
	*/
	
?>