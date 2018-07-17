<?php
	
	$selectName = "SELECT First_Name, Last_Name FROM service_provider where ID_Number='$name2'";
	$execQuery = mysql_query( $selectName, $conn );
	
	if(!$execQuery)
	{
		
	}
	else
	{
		$namesRow = mysql_fetch_array($execQuery);
		$user1name = $namesRow["First_Name"];
		$user2name = $namesRow["Last_Name"];
		
		
	}
	
	
	
?>