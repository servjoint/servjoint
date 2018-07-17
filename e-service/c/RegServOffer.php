<?php

	if(isset($_COOKIE['RegPgFirst'] ) )
	{
		echo "<script> window.location='/e-service/regServOffer.php' </script>";
	}else
	{
		echo "<script> alert('Please Make Sure Cookies Are Enabled...') </script>";
		echo "<script> window.location='/e-service/regServOffer.php' </script>";
	}
	
	if(isset($_COOKIE['RegPg2'] ) )
	{
		echo "<script> window.location='/e-service/regServOffer.php' </script>";
	}else
	{
		echo "<script> alert('Please Make Sure Cookies Are Enabled...') </script>";
		echo "<script> window.location='/e-service/regServOffer.php' </script>";
	}
	
	if(isset($_COOKIE['RegPgLast'] ) )
	{
		echo "<script> window.location='/e-service/regServOffer.php' </script>";
	}else
	{
		echo "<script> alert('Please Make Sure Cookies Are Enabled...') </script>";
		echo "<script> window.location='/e-service/online/profile.php' </script>";
	}

?>