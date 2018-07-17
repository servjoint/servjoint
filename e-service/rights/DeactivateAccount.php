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
			
			<?php
			if( isset($_GET["accDea"]) )
			{
				$account = $_GET["accDea"];
				
				$mySlect = "Select * from service_provider Where ID_Number ='$account'";
			
				$queryIndSer = mysql_query( $mySlect, $conn );	
				
				$row = mysql_fetch_array($queryIndSer);
				
				$idnum = $row["ID_Number"];
				$fname = $row["First_Name"];
				$lst = $row["Last_Name"];
				$dob = $row["DOB"];
				$add = $row["Address"];
				$mail = $row["E_Mail"];
				$cont = $row["Contact_Details"];
				$altCont = $row["Alternative_Contacts"];
				
				if( empty($add) )
				{
					$add = "None";
				}
				
				if(empty($cont))
				{
					$cont = "None";
				}
				
				if(empty($mail))
				{
					$mail = "None";
				}
				
				if(empty($altCont))
				{
					$altCont = "None";
				}
				
				echo "<div align='center' id='accDec'> Account Deactivation </div>";
				if( mysql_num_rows($queryIndSer) == 1 )
				{
					echo "<div  id='accDecData'>
							<table  style='margin-left: 25px; text-align:left; '>
							<tr>
							<th>
								Account Holder:
							</th>
							<th>
								$fname $lst
							</th>
							</tr>
							
							<tr>
							<th>
								ID_Number
							</th>
							<th>
								$idnum
							</th>
							</tr>
							
							<tr>
							<th>
								Email:
							</th>
							<th>
								$mail
							</th>
							</tr>
							
							<tr>
							<th>
								Contact Details:
							</th>
							<th>
								$cont
							</th>
							</tr>
							
							<tr>
							<th>
								Alternative Contacts:
							</th>
							<th>
								$altCont
							</th>
							</tr>
							
							<tr>
							<th>
								Home Address:
							</th>
							
							<th>
								$add
							</th>
							</tr>
							
							<tr>
							<th>
								Services
							</th>
							<th>";
								
								// list of services the user is offering
								$myServ = "Select * from serv_indvi_offer Where Serv_Provider ='$idnum'";
			
								$queryServ = mysql_query( $myServ, $conn );

								if( mysql_num_rows($queryServ) != 0)
								{
										
									while( $rowSer = mysql_fetch_array($queryServ) )
									{
										// display
										/*
											service: painter	Active (green)
													 welder		Not Active (red)
													 Builder	Active (green)
										
										*/
									}
								}else{
									echo "None";
								}
				
								
							echo "</th>
							</tr>
							
							<tr>
							<th>
								Account Activated By:
							</th>
							
							<th>";
									// fetch administrator details
									$activID = $row["Activation_id"];
					
							$selectAdmin = "Select * from acc_validate Where Activate_Number = '$activID' ";
							$queryAdmSer = mysql_query( $selectAdmin, $conn );
						
							$rowFetchAdm = mysql_fetch_array($queryAdmSer);
						
						
							$admn = $rowFetchAdm["Adminstr"];
							$status = $rowFetchAdm["Statuse"];
							if($status == 1){
								$status="Online";
							}else{
								$status="Offline";
							}
							$tmeDate = $rowFetchAdm["Time_Date"];
							$servPr = $rowFetchAdm["Service_Provider"];
							
							$selectAdminName = "Select * from adminstr Where email = '$admn' ";
							$queryAdmSerName = mysql_query( $selectAdminName, $conn );
						
							$rowFetchAdmName = mysql_fetch_array($queryAdmSerName);
							$admne = $rowFetchAdmName['name'];
							$admnesur = $rowFetchAdmName['surname'];
							
							echo $admn."($admne $admnesur)" ;
							
							echo "</th>
							</tr>
							
							<tr>
							<th>
								Activation Date:
							</th>
							
							<th>
								$tmeDate
							</th>
							</tr>
							
							<tr>
							<th>
								Activation Status:
							</th>
							
							<th>
								$status
							</th>
							</tr>
							
							<tr>
							<th>
								
							</th>
							
							<th>
								
							</th>
							</tr>
							
							<form method='GET'>
							<tr>
							<th>
								Do You Want To Deactivate This Account?
							</th>
							
							<th>" ?>
								 <input type="hidden" name="adid" value="<?php echo $username; ?>" />
								 <button name='deact' id='btnDeact' alt='Deactivate account' title="Deactivate account" onclick="this.form.action='deact.php' " value='<?php echo $idnum?>' >YES</button> 
								 <button name='act' id='btnDeactNo' alt='Cancel' title="Cancel"  onclick="this.form.action='manIndServPro.php' " value='nah'>NO</button> 
							
							<?Php echo"</th>
							</tr>
							</form>
							</table>
						</div>";
				}else
				{
					echo "<div align='center' id='accDecData'></br> No Record Retrieved...</div>";
				}
				
				
			}else{
				echo "<script> window.location='manIndServPro.php' </script>";
			}
			

			?>
</div>


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


