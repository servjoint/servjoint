<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Administrator</title>
    
    <link rel="stylesheet" href="./css/admin.css">
	
	<link rel="icon" href="./img/SJoint.png" type="image/x-icon" />
	<link rel="shortcut icon" href="./img/SJoint.png" type="image/x-icon" />

</head>

<?php

	error_reporting("false");
	require("inc/connection.php");
	
	$name ="";
	$surname = "";
	
	if( isset($_COOKIE["sjcom"]) && isset($_COOKIE["ervoint"]) )
	{
		
		
		$username = $_COOKIE["sjcom"];
		$passwo = $_COOKIE["ervoint"];
		
		$selc = "Select * from adminstr where email ='$username' ";
		$query = mysql_query( $selc, $conn );

		$row = mysql_fetch_array($query);
		
		
		if( $row["email"] == $username && $row["Pass"] == $passwo && $row["activation"] == 1)
		{
			 $name = $row["name"];
			 $surname = $row["surname"];
		
			require("inc/dash.php");
		?>

<!-- start of main activity -->
<div class = "main-activity">
		<div class= "Accounts">
			<div align="center" ><font color="orangered" size="24px">  </font> 
			</div>
		
		<?php
			// fetch all the individual service seekers that are activated and deactivated.
			
			
			$mySlect = "Select * from service_provider Where Activation_id IS NOT NULL";
			
			$queryIndSer = mysql_query( $mySlect, $conn );
			
			if(mysql_num_rows($queryIndSer) != 0)
			{
				
				// Activation_id IS NOT NULL
				while( $rowFetch = mysql_fetch_array($queryIndSer) )
				{	
					$idnum = $rowFetch["ID_Number"];
					$sname = $rowFetch["First_Name"];
					$ssurname = $rowFetch["Last_Name"];
					$semail = $rowFetch["E_Mail"];
					$scntDet = $rowFetch["Contact_Details"];
					$saltCntDet = $rowFetch["Alternative_Contacts"];
					
					$activID = $rowFetch["Activation_id"];
					
						$selectAdmin = "Select * from acc_validate Where Activate_Number = '$activID' ";
						$queryAdmSer = mysql_query( $selectAdmin, $conn );
						
						$rowFetchAdm = mysql_fetch_array($queryAdmSer);
						
						
						$admn = $rowFetchAdm["Adminstr"];
						$status = $rowFetchAdm["Statuse"];
						$tmeDate = $rowFetchAdm["Time_Date"];
						$servPr = $rowFetchAdm["Service_Provider"];
						$deac = $rowFetchAdm["Deact"];
					   
					   if($idnum == $servPr & $status == 1)
					   {
						   echo "<div id='Found'>
						   </br>
							<form method='GET'>
							<text>Account Holder: <font color='darkgreen'> $sname $ssurname </font>
							</br>Contact Details: <font color='darkgreen'> $scntDet &nbsp&nbsp $semail &nbsp&nbsp $saltCntDetalt </font>
							</br>Account Status: <font color='darkgreen' >Activated </font> 
							</br>Activation Date/Time: <font color='darkgreen' >$tmeDate</font>"; ?>
							
							
							</br>Activated By: 
							<button onclick="this.form.action='activateAccount.php' " id="adminButton" name="accBy" value="<?php echo $admn ?>"><?php echo $admn ?> </button>
							</br><button onclick="this.form.action='DeactivateAccount.php' " id="adminDeButton" name="accDea" value="<?php echo $idnum ?>"><?php echo "Deactivate Account" ?></button>
							
						<?php echo "</text></form>
							</div>";
					   }else{
						   
						   echo "<div id='Found'>
						   </br>
							<form method='GET'>
							<text>Account Holder: <font color='darkgreen'> $sname $ssurname </font>
							</br>Contact Details: <font color='darkgreen'> $scntDet &nbsp&nbsp $semail &nbsp&nbsp $saltCntDetalt </font>
							</br>Account Status: <font color='darkred' > Deactivated by: $deac</font> 
							</br>Activation Date/Time: <font color='darkgreen' >$tmeDate</font>"; ?>
							
							
							</br>Last Activated By: 
							<button onclick="this.form.action='activateAccount.php' " id="adminButton" name="accBy" value="<?php echo $admn ?>"><?php echo $admn ?> </button>
							
							</br><button onclick="this.form.action='activateAcc.php' " id="adminDeButton" name="accAct" value="<?php echo $idnum ?>"><?php echo "Activate Account" ?></button>
							
						<?php echo "</text></form>
							</div>";
							
					   }
						    
					 
				}
				
				
				
			}else{
					echo "<div id='NotFound' >
						<text> No Service Providers Found!!!. </text>
						</div>";
				}	
		
		?>
		
</div>
		
<?php
		}
			else
		{
		echo "<script> window.location='.\./log.php' </script>";
		} // end of validating if account is active
		
		
		
	}else{
			echo "<script> window.location='.\./log.php' </script>";

	} // end of account cookie
	
?>