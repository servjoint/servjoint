<body id="bg">
<div class="fixed-cont" >
	<div class="page-header">
        <h1 align="center" > <!-- <font style=" font-style: italic; font-weight: bolder;
			color: white; "> ServJoint </font> --> 
				<img src="img/ico.jpg" width="300px" height="250px" style=" margin: -56; margin-top: 0px; margin-right: 0px; margin-bottom: 0px;"/> 
			</h1> 
		</div>
		<div class="logged-user">
		<?php
			require("inc/connection.php");
			error_reporting(false);
			
			if( isset($_COOKIE["serv"]) && isset($_COOKIE["joint"]) )
			{
		
				$username = $_COOKIE["serv"];
				$passwo = $_COOKIE["joint"];
		
				$selc = "Select * from service_provider where Username ='$username' ";
				$query = mysql_query( $selc, $conn );

				$row = mysql_fetch_array($query);
		
				if( $row["Username"] == $username & $row["Current_Password"] == $passwo)
				{
					$name = $row["First_Name"];
					$surname = $row["Last_Name"];
					
					if($row["Activation_id"] != NULL)
					{
						$actCode = $row["Activation_id"];
						$selcCode = "Select * from acc_validate where Activate_Number ='$actCode' ";
						$queryCode = mysql_query( $selcCode, $conn );

						$rowCode = mysql_fetch_array($queryCode);
		
						if( $rowCode["Service_Provider"] == $row["ID_Number"] & $rowCode["Statuse"] == 1)
						{
							echo "Welcome: <text class='logged-users' >".$name." ".$surname."</text> | <a class='logout' id='logout' href='inc/logout.php' alt='sign out' title='sign out' >Logout</a>";
						}else{
							echo "<script> alert('Account is currently under inspection\\nPlease Try Again Later or Contact us') </script>";
							echo "<script> window.location='.\./log.php' </script>";
						} // end of if statement of Service_Provider and Statuse
					}else{
						
						echo "<script> alert('Your Account Have Not Yet Been Activated By The Administrators\\nAccount Activation Takes 24HRs at max') </script>";
						echo "<script> window.location='.\./log.php' </script>";
					} // end of if statement
					
				}
			}else{
				
				echo "<script> window.location='.\./log.php' </script>";
			} // end of if statement of checkin cookie
		
		?>
		</div>
	
	<hr color="lightgreen" style="position: sticky;">
	<nav class="menu" id="menu">
		<a href="myserv.php" id="menu-cont"> My Services </a>
		<a href="feednews.php" id="menu-cont"> Feed News </a>
		<a href="profile.php" id="menu-cont"> Profile </a>
		<!-- <a href="account_setting.php" id="menu-cont"> Account Settings </a> -->
	</nav>
	
</div>
