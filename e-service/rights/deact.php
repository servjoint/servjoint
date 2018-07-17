<?php
error_reporting("false");
require("inc/connection.php");

	$idnum = $_GET["deact"];
	$admin = $_GET["adid"];
	
	$selc = "UPDATE acc_validate SET Statuse='0', Deact='$admin' WHERE service_provider='$idnum' ";
	
	$q = mysql_query($selc,$conn);
	
	if(!$q)
	{
		echo"<script> window.location='DeactivateAccount.php?accDea=$idnum' </script>";
	}else{
		echo"<script> window.location='manIndServPro.php' </script>";
	}
	

?>