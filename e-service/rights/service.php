<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Administrator Service</title>
    
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
		<div class= "services">
			<div align="center" ><font color="orangered" size="24px">  </font> 
			</div>
		
		</br>
		
		<script LANGUAGE=”JavaScript” >
		function change(var orginalName)
		{
			alert("The same");
			var serviceName = document.forms[0].txtServName;
			
			if(serviceName != orginalName)
			{
				alert("Not the same");
			}else{
				alert("The same");
			}
			
		}
		</script>
			<?php
				// check if get method exists
				if(isset($_GET['s']) )
				{
					$serv = $_GET['s'];
					
					$getAll = "Select * from service Where Serv_Name='$serv' ";
					$queryAll = mysql_query( $getAll , $conn);
					
					
					
					// check if service is in the database
					if( mysql_num_rows($queryAll) == 0 )
					{
						echo "<script> alert('Undefined Service!!!') </script>";
						echo "<script> window.location='./dashboard.php' </script>";						
					}else{
						$row = mysql_fetch_array($queryAll);
					
						echo "<form action='changeServ.php' method='GET' id='serviceForm' name='serviceForm' >
							<input type='text' id='servEdit' readonly title='Service ID' value='Service ID : ".$row['Serv_ID']."' />
							</br>
							<input type='text' id='servEdit' name='txtServName' title='Service Name' value= ' ".$row['Serv_Name']."' onChange='change('".$row['Serv_Name']."')' /> <nav id='ChangeName' >  </nav>
							
							<input type='text' id='servEdit' name='txtRegFee' title='Registration Fee' value= ' ".$row['Reg_Fee']."' onChange='change('".$row['Reg_Fee']."')' /> <nav id='ChangeReg' >  </nav>
							
							<textarea id='servEdit' rows='5' name='txtDescr' title='Service Description' onChange='change('".$row['Serv_Description']."')' >".$row['Serv_Description']." </textarea> <nav id='ChangeReg' >  </nav>	
							<input type='hidden' name='IDServ' value='".$row['Serv_ID']."' />
							<input type='submit' id='btnSub' name='btnSub' title='Click To Update' value='Update'/>
							
							
							</br>
							
							</form>";
					
				}
					
				}else{
					echo "<script> alert('Undefined Service!!!') </script>";
					echo "<script> window.location='./dashboard.php' </script>";
				}
				
				
				
			?>
		
			<div>
		</br>
			</div>
		

		</div>
	</div>
	
	<?php
	}else{
		echo "<script> window.location='.\./log.php' </script>";
	}
	
	}else{
			echo "<script> window.location='.\./log.php' </script>";

	}
	
	?>