<?php
$selectServices = "Select * from serv_indvi_offer WHERE Serv_Activation='1' and Serv_Provider ='$username'";
	$queryServ = mysql_query( $selectServices , $conn);
	
	if(mysql_num_rows($queryServ)!= 0 )
	{
		while($rowS = mysql_fetch_array($queryServ))
		{	$serID = $rowS["Service_ID"];
			$servOff = $rowS["Serv_Off_ID"];
			$seServices = "Select * from service WHERE Serv_ID ='$serID'";
			$querySer = mysql_query( $seServices , $conn);
			
			$rowServ = mysql_fetch_array($querySer);
			
			if($rowS["Serv_Activation"] == 1 )
			{
				$act = "Activated";
			}else{
				$act = "Deactivated";
			}
			
		echo "<div class='serv'></br>";
		echo "<div class='servText'><form method='POST'> Service Offered: ".$rowServ["Serv_Name"];
		echo "</br> Service Description: ".$rowServ["Serv_Description"];
		echo "</br> Service Status: ".$act;
		$servName = $rowServ["Serv_Name"];
		echo " <input type='hidden' value='$servName' name='serv'>";
		echo "</br>My Service Description: ".$rowS["Serv_Prov_Serv_Descr"];?> <button id='btnEdit' onclick="this.form.action='edit.php' " >(edit)</button> 
		<input type='hidden' value="<?php echo $rowS['Serv_Off_ID'] ?>" name='edit'> 
		</form><?php
		if($act == "Deactivated")
		{
			echo "<form method='GET' action='cancelS.php'>";
			echo "Registration Fee of Service: R".$rowServ["Reg_Fee"];
			echo " <input type='hidden' value='$servOff' name='s'>";
			echo " <input type='hidden' value='$username' name='i'>";
			echo "</br> <input type='submit' id='btnCnl' title='Click To Cancel Service' value='Cancel Service' >";
			echo "</form>";
		}
		echo "</div> </div>";
		} // end of while loop statement
	}else{
		echo "<div class='serv' align='center'>";
		echo "You have No Services That You Are Registered to Or Your Service Havn't been activated";
		echo "</div>";
	} // end of else statement of number of rows == 0
	
	require("inc/service_fetch.php");
	
	
?>