<?php
error_reporting("false");
if( isset($_COOKIE["sjcom"]) && isset($_COOKIE["ervoint"]) )
{

	if(isset($_POST['admin']) && isset($_POST['ID']) )
	{
		require("connection.php");
		$adminName = $_POST["admin"];
		$servP = $_POST["ID"];
	
		$letter = array_merge(range('a','z'), range('A','Z'), range(0,9));
	
		$word = $letter[rand(0,61)].
		$letter[rand(0,61)].
		$letter[rand(0,61)].
		$letter[rand(0,61)].
		$letter[rand(0,61)].
		$letter[rand(0,61)];
	
		
		
		 $mySelc = "Select * from  acc_validate where Activate_Number ='$word'";
		
		 $queryAcc = mysql_query( $mySelc, $conn );
		 
		 if(mysql_num_rows($queryAcc) == 0 )
		 {
			 $myCheck = "Select * from  acc_validate where Service_Provider ='$servP'";
		
			 $queryCheck = mysql_query( $myCheck, $conn );
			if(mysql_num_rows($queryCheck) == 0)
			{
				
				$indespc= strrpos($adminName," ");
				$adName = substr($adminName, 0, $indespc);
				
				
				$myAdmin = "Select * from  adminstr where name ='$adName'";
				
		
				$queryAdminName = mysql_query( $myAdmin, $conn );
				$rowFetch = mysql_fetch_array($queryAdminName);
				$adminUser = $rowFetch["email"];
				
			 $insert = "Insert INTO acc_validate(Activate_Number, Statuse, Adminstr, Service_Provider) 
						VALUES('$word','1','$adminUser','$servP')";
			
			// Execute my SQL Statement
			$ex = mysql_query($insert , $conn);
			
				if( !$ex )
				{
					echo "<script> alert('Could Not Activate User Account') </script>";
					echo "<script> window.location='.\./activate.php' </script>";
				}else{
					$insertSerP = "UPDATE service_provider SET Activation_id ='$word' Where ID_Number ='$servP'";
						
						$exP = mysql_query($insertSerP , $conn);
						if( !$exP )
						{
							echo mysql_error();
							echo "<script> alert('Could Not Activate User Account') </script>";
							echo "<script> window.location='.\./activate.php' </script>";
						}else{
							echo "<script> alert('Account Successfully Activated!') </script>";
							echo "<script> window.location='.\./activate.php' </script>";
						}
				}
			
				}else{
					echo "<script> alert('Account: $servP Already Exists') </script>";
					 echo "<script> window.location='.\./activate.php' </script>";
				}	
			
			
			
		 }else{
			 
			 $letterRe = array_merge(range('a','z'), range('A','Z'), range(0,9));
			 $wordRe = $letterRe[rand(0,61)].
					 $letterRe[rand(0,61)].
					 $letterRe[rand(0,61)].
					 $letterRe[rand(0,61)].
					 $letterRe[rand(0,61)].
					 $letterRe[rand(0,61)];
			
			
			$myRetry = "Select * from  acc_validate where Activate_Number ='$wordRe'";
		
			$queryReAcc = mysql_query( $myRetry, $conn );
		 
			if(mysql_num_rows($queryReAcc) == 0 ) // retry to insert
			{
				
				
				$myCheck = "Select * from  acc_validate where Service_Provider ='$servP'";
		
			 $queryCheck = mysql_query( $myCheck, $conn );
			if(mysql_num_rows($queryCheck) == 0)
			{
				$indespc= strrpos($adminName," ");
				$adName = substr($adminName, 0, $indespc);
				
				
				$myAdmin = "Select * from  adminstr where name ='$adName'";
				
		
				$queryAdminName = mysql_query( $myAdmin, $conn );
				$rowFetch = mysql_fetch_array($queryAdminName);
				$adminUser = $rowFetch["email"];
				
			
			 $insertRe = "Insert INTO acc_validate(Activate_Number, Statuse, Adminstr, Service_Provider) 
						VALUES('$word','1','$adminUser','$servP')";
			
			// Execute my SQL Statement Retry
			$exRe = mysql_query($insertRe , $conn);
			
				if( !$exRe )
				{
					echo "<script> alert('Could Not Activate User Account') </script>";
					echo "<script> window.location='.\./activate.php' </script>";
				}else{
					$insertSerPRe = "UPDATE service_provider SET Activation_id ='$word' Where ID_Number ='$servP'";
						
						$exP = mysql_query($insertSerPRe , $conn);
						if( !$exP )
						{
							echo mysql_error();
							echo "<script> alert('Could Not Activate User Account') </script>";
							echo "<script> window.location='.\./activate.php' </script>";
						}else{
							echo "<script> alert('Account Successfully Activated!') </script>";
							echo "<script> window.location='.\./activate.php' </script>";
						}
				}
			
				}else{
					echo "<script> alert('Account: $servP Already Exists') </script>";
					 echo "<script> window.location='.\./activate.php' </script>";
				}	
			
				
				
				
				
			}
				else
			{
				
			}
		 }
	
		}
		 else
		{
			 echo "<script> window.location='.\./activate.php' </script>";
		}
	}	
	 else
	{
			 echo "<script> window.location='.\./activate.php' </script>";
	}
		
?>