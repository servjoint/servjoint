<?php
	
	$name = $_POST["txtName"];
	$surname = $_POST["txtSurname"];
	$email = $_POST["txtEmail"];
	
	
	$to = $email;
	$subject = "ServJoint Password Retrieval";
	$body = "$name $surname requested a new password with this email.\nIf this is you, please click on the button below to set your new password";
	$header = 'From: ServJoint <noReply@servjoint.com>';
	
	
	 
	
	if( mail($to,$subject,$body,$header) )
	{
		
	}else{
		
	}
?>