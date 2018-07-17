<?php
	
	// Test reg1
	// echo $name."</br>".$surname."</br>".$id."</br>".$gender."</br>".$serviceOffer."</br>";
	// save to cookie
	
	require("inc/connection.php");
	
	if(isset($_POST['form1'] ) ) // form1 registeration form
	{
		
		//	echo "<script> alert('form1 was clicked') </script>";
		// Validations of form1
		
		// ------------------Start of Reg1------------------
				$name = $_POST['txtName'];
				$surname = $_POST['txtSurname'];
				$gender = $_POST['radGend'];
				$id = $_POST['txtID_Num'];
				$serviceOffer = $_POST['combService'];
				
		// -------------------End of Reg1-------------------
		
		if(empty($serviceOffer))
		{
			echo "<script> window.location='/e-service/RegServOffer.php' </script>";
		}
		
		if( $name == null && $surname==null && $id == null)
		{
			
			echo "<script> window.location='/e-service/RegServOffer.php' </script>";
		
		}else{
			setcookie('RegPgFirst',$id, time()+(60*15),"/");
			
			
			// SQL Statement
			$statement = "INSERT INTO service_provider(ID_Number, First_Name, Last_Name, Gender)".
			"VALUES('$id','$name','$surname','$gender')";
			
			// Execute my SQL Statement
			$ex = mysql_query($statement , $conn);
			
			if( !$ex )
			{
				// echo "<script> alert('".mysql_error()."') </script>";
				echo "<script> window.location='/e-service/c/RegServOffer.php' </script>";
			}else{
				setcookie('cudkjhgkhgjdfgfgdsd',$id, time()+(60*15),"/");
				$servLook = "SELECT * FROM service WHERE Serv_ID='$serviceOffer' ";
				$servL = mysql_query($servLook , $conn);
				
					
					
				
				$row = mysql_fetch_array($servL);
				

				$servID = $row["Serv_ID"];
				$servDesc = $row["Serv_Description"];
				
				$insertServ = "INSERT INTO serv_indvi_offer(Serv_Desc, Service_ID, Serv_Provider) VALUES('$servDesc','$serviceOffer','$id')";
				
				$servReg = mysql_query($insertServ , $conn);
				
				if(!$servReg)
				{
					echo "<script> alert('".mysql_error()."') </script>";
				}
				
			//	echo "<script> alert('$id') </script>";
			}
			
			echo "<script> window.location='/e-service/c/RegServOffer.php' </script>";
		}
		
	}
	else if ( isset($_POST['form2'] ) ) // form2 registeration form
	{
		
		
		// Validations of form2
			
		// ------------------Start of Reg2------------------
				
				$addr = $_POST['txtAddress'];
				$email = $_POST['txtEmail']; 
				$cont = $_POST['txtCont'];
				$contAlt = $_POST['txtContAlt'];
				$city = $_POST['City'];
				$prov = $_POST['Province'];
		
		
		
		if($email==null && $addr==null && $cont==null )
		{
			echo "<script> window.location='/e-service/RegServOffer.php' </script>";
		}
		else
		{
			
			setcookie('RegPg2','Set', time()+(60*15),"/");
			$user = $_COOKIE['cudkjhgkhgjdfgfgdsd'];
		// ------------ Start of Date Format ---------------
				$dob = $user;								
				$mm = substr($dob,0,2);						
				$dd = substr($dob,3,2);						
				$yyyy= substr($dob,6,2);					
				$dob = "  ".$dd." - ".$mm." - ".$yyyy;				
															
		// ------------- End of Date Format-----------------
			
			// SQL Statement
			
			$statement = "UPDATE Service_Provider SET DOB='$dob' ,Address='$addr',City='$city' ,Province='$prov' ,E_Mail='$email' , Contact_Details='$cont', Alternative_Contacts='$contAlt' WHERE ID_Number='$user' ";
			
			
			// Execute my SQL Statement
			$ex = mysql_query($statement , $conn);
			
			if( !$ex )
			{
				echo "<script> alert('".mysql_error()."') </script>";
				echo "<script> window.location='/e-service/c/RegServOffer.php' </script>";
			}
			
			echo "<script> window.location='/e-service/c/RegServOffer.php' </script>";
		}
		
		// -------------------End of Reg2-------------------
			
	}
	else if( isset($_POST['form3'] ) ) // form3 registeration form
	{
		// Validations of form3
		
		if($_POST['chck'] == true)
		{
			
			// ------------------Start of Reg3------------------
				$pass = $_POST['txtPass'];
			// -------------------End of Reg3-------------------
			
			setcookie('RegPgLast','Set', time()+(60*15),"/");
			$user = $_COOKIE['cudkjhgkhgjdfgfgdsd'];
			// SQL Statement
			$statement = "UPDATE Service_Provider SET Current_Password='$pass' WHERE ID_Number='$user' ";
			
			// Execute my SQL Statement
			$ex = mysql_query($statement , $conn);
			
			if( !$ex )
			{
				echo "<script> alert('".mysql_error()."') </script>";
				echo "<script> window.location='/e-service/c/RegServOffer.php' </script>";
			}else{
				echo "<script> window.location='/e-service/log.php' </script>";
			}
			
			
		}
		else
		{
			
			
			echo "<script> window.location='/e-service/c/RegServOffer.php' </script>";
		}
	
			
	} 
	
	// ------------------Start of Reg1------------------	
	/* 
		
	*/
	// -------------------End of Reg1-------------------
	


?>