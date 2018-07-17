<?php
	if(isset($_COOKIE['RegPgLast'] ) )
	{
		setcookie('RegPgLast','',time()-3600,"/");
		//echo "<script> alert('m Here Always') </script> ";
		echo "<script> window.location='/e-service/regServOffer.php' </script>";
	
	}
	else if(isset($_COOKIE['RegPg2'] ) )
	{
		setcookie('RegPg2','',time()-3600,"/");
		//echo "<script> alert('m Here') </script> ";
		echo "<script> window.location='/e-service/regServOffer.php' </script>";
		
	}
	else if( isset($_COOKIE['RegPgFirst'] ) ) 
	{
		setcookie('RegPgFirst','',time()-3600,"/");	
		//echo "<script> alert('Clear 1 ') </script> ";
		echo "<script> window.location='/e-service/regServOffer.php' </script>";
	}

?>
