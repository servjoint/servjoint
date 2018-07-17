<?php
	error_reporting(false);
	require("inc/start.php");
	require("inc/header.php");
	
	echo "<form action='msg.php' method='POST' ><div class='WriteMsg'> ";
	echo "
	<input type='hidden' name='u' value='$username' /> 
	<input type='submit' id='btnWrite' value='Write a message to Serve Joint&nbsp&nbsp'/> 
	";
	echo "</div></form>";
	
	require("inc/msg.php");
	
?>
