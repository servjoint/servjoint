<?php
	if($conn != NULL)
	{
		mysql_close($conn);
	}

	setcookie("serv","servJoint",time()-(60*60),"/");
	setcookie("joint","servJoint",time()-(60*60),"/");
	
	echo "<script> history.replace() </script>";
	echo "<script> window.location='..\./index.php' </script>";
?>
