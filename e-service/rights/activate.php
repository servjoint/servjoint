<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Administrator Account Activation</title>
    
    <link rel="stylesheet" href="./css/admin.css">
	
	<link rel="icon" href="./img/logo.jpg" type="image/x-icon" />
	<link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon" />

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
	
	<div class= "services">
		<div align="center" ><font color="orangered" size="24px"> Account Activation </font> 
		</div>
		
		<?php
			$getAcc = "Select * From service_provider Where Activation_id is NULL ";
			$queryAcc = mysql_query( $getAcc, $conn );
			
			if( mysql_num_rows($queryAcc) == 0 )
			{
				echo "<div id='NoAcc'> No Account(s) Need To Be Activated For Now </div>";
			}
				else
			{
					while( $rowA = mysql_fetch_array($queryAcc) )
					{
						echo "<form method='POST' action='inc/activateUsers.php'>
							<div id='AccountAct' >
							</br>
								<text id='textAcc'> 
									".$rowA['First_Name']." ".$rowA['Last_Name']." ". $rowA['ID_Number']."&nbsp &nbsp &nbsp</br>&nbsp &nbsp &nbsp&nbsp &nbsp".
									
									'<img id="Proof" alt="Proof of ID" title="Proof of ID" src="data:image/jpeg;base64,'.
									base64_encode( $rowA["Proof_of_ID"] ).'" />'." &nbsp&nbsp&nbsp ".
									
									'<img id="Proof" alt="Proof of Resident" title="Proof of Resident" src="data:image/jpeg;base64,'.
									base64_encode( $rowA["Proof_of_Resident"] ).'" />'."
									<textarea rows='4' readonly id='addr' >".$rowA["Address"]."</textarea>
									<input type='hidden' value='".$rowA['ID_Number']."' name='ID' />
									<input type='submit' id='btnSubAcc' value='Activate Account' title='Click To Activate Account'/>
									<input type='hidden' value='".$name." ".$surname."' name='admin'/>
									
								</text>
							</div>
						</form>";
					}
			}
			
		?>
		
	</div>
	
</div>

</body>
	
	<?php
	}
	
	}else{
			echo "<script> window.location='.\./log.php' </script>";

	}
	
	?>