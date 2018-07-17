<?php
	require("connection.php");
	$statement = "Select * From service";
	
	
	
	$ex = mysql_query($statement, $conn);
	
	if( !$ex )
	{
		echo "<script> alert('".mysql_error()."') </script>";
		echo "<script> window.location='/e-service/index.php' </script>";
	}else{
		
		 
	}
	
	
	$servicesArr = array();
	
	
?>