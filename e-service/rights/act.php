<?php
error_reporting("false");
require("inc/connection.php");

	$idnum = $_GET["accAct"];
	$admin = $_GET["adid"];
	
	$selc = "UPDATE acc_validate SET Statuse='1', Adminstr='$admin' WHERE service_provider='$idnum' ";
	
	$q = mysql_query($selc,$conn);
	
	if(!$q)
	{
		echo"<script> window.location='DeactivateAccount.php?accDea=$idnum' </script>";
	}else{
		echo"<script> window.location='manIndServPro.php' </script>";
	}
	

?>