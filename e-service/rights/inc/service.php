<?php
	$selcServ = "SELECT * FROM serv_indvi_offer WHERE Serv_Activation='0' ";
	$querySelc = mysql_query( $selcServ , $conn);

	if($querySelc)
	{
		if(mysql_num_rows($querySelc) != 0 )
		{
			echo "</br>";
			while($rowServInd = mysql_fetch_array($querySelc) )
			{
				$serID = $rowServInd["Service_ID"];
				$userID = $rowServInd["Serv_Provider"];
				$idServ = $rowServInd["Serv_Off_ID"];
				
				echo "<div class='serv' align='center'>";
				echo "<form action='inc/servAct.php' Method='POST'>";
			
				$selcService = "SELECT * FROM service where Serv_ID ='$serID'";
				$queryServe = mysql_query( $selcService , $conn);
				
				$rowServDetails = mysql_fetch_array($queryServe);
				$nameSer = $rowServDetails["Serv_Name"]; 
				$fee = $rowServDetails["Reg_Fee"]; 
				$desc = $rowServDetails["Serv_Description"];
				
				echo "<input type='hidden' name='servP' value='$userID' >";
				echo "<input type='hidden' name='servOffID' value='$idServ' >";
				echo "<input type='hidden' name='servID' value='$serID' >";
				
				echo "<div class='serv' align='left'>";
				echo "<div id='AccountAct' align='left'>";
				echo "<div class='user_details'><table id='tableText'><tr>";
					echo "<th>Ref:".$userID . "&nbsp&nbsp</th> <th> R".$fee . "&nbsp&nbsp&nbsp</th> 
					<th>Service Name:" .$nameSer. "</th> 
					<th>&nbsp&nbsp&nbspService Name:" .$desc. "</th> ";
				echo "</tr></table>";
				echo "<div class='subm'><input type='submit' id='btnSubm' value='Activate Service'> </div>";
				echo "</div>"; // end of user details class
				echo "</div>"; // end of AccountAct class
				echo "</div>"; // end of serv class
				
				echo "</form> </div>";
			}
		}else{
			echo "<div class='serv' align='center'>";
			echo "<font color='red'>No Registered Services at this moment</font>";
			echo "</div>";
		}
		
		
	}else{
		echo "<div class='serv' align='center'>";
		echo "No Services";
		echo "</div>";
	}
	echo "</br>";
?>