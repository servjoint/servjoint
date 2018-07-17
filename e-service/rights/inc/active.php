<?php
	$selectAll = "Select * from service";

	$queryAll = mysql_query( $selectAll, $conn );
	
		$prof;
	
	while( $rowAll = mysql_fetch_array($queryAll) )
	{
		echo "<text class = 'service-name'>
			<form method='GET' action='service.php' id='serviceForm'> 
			<input type='submit' id='serviceLink' name='s' value='". $rowAll["Serv_Name"]."'/>
			<text> 
			<font color='midnightblue' > Reg Fee R</font>".$rowAll["Reg_Fee"] 
			." <font color='midnightblue' >  Current Users: "
			.$rowAll["Curr_of_User"]." Profit on Service: R"
			.$rowAll["Reg_Fee"] * $rowAll["Curr_of_User"]
			." </font></text>
			</form> 
			</text>  
			";
		$prof = $prof + $rowAll["Reg_Fee"] * $rowAll["Curr_of_User"];
	}
	
	
?>
