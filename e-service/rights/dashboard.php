<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Administrator Dashboard</title>
    
    <link rel="stylesheet" href="./css/admin.css">
	
	<link rel="icon" href="./img/logo.jpg" type="image/x-icon" />
	<link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon" />

</head>
<?php
	error_reporting("false");
	
	require("inc/connection.php");
	
	
	$name ="";
	$surname = "";
	
	if( isset($_COOKIE["sjcom"]) && isset($_COOKIE["ervoint"]) )
	{
		
		$username = $_COOKIE["sjcom"];
		$passwo = $_COOKIE["ervoint"];
		
		$selc = "Select * from adminstr where email ='$username' ";
		$query = mysql_query( $selc, $conn );

		$row = mysql_fetch_array($query);
		
		
		if( $row["email"] == $username && $row["Pass"] == $passwo && $row["activation"] == 1)
		{
			 $name = $row["name"];
			 $surname = $row["surname"];
			 require("inc/header.php");
			
		}

			
		
		?>
</body>
<footer>

</footer>
		<?php
	}else{
		
		echo "<script> window.location='.\./log.php' </script>";
	}
?>

</html>

		
