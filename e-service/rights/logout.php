<?php
	if($conn != NULL)
	{
		mysql_close($conn);
	}

	setcookie("sjcom","servJoint",time()-(60*60),"/");
	setcookie("ervoint","servJoint",time()-(60*60),"/");
	
	echo "<script> history.replace() </script>";
	echo "<script> window.location='.\./index.php' </script>";


?>
