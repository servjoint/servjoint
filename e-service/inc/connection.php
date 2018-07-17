<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername,$username,$password);

// Check connection
if ($conn != false){
	$connected = true;
	// echo "Database Connection Successful."."</br>";
}else{
	$connected = false;
	echo "Error number: ".mysql_errno()."</br>";
	echo "Error message: ".mysql_error();
	}
	
// Select a database to use
$DB_select = mysql_select_db("servJoint",$conn);

if ($DB_select != false){
	$con_db = true;
	// echo "DB exist"."</br>";
	
}else{
	$con_db = true;
	echo "DB Doesnt exist"."</br>";
	echo "Error number: ".mysql_errno()."</br>";
	echo "Error message: ".mysql_error()."</br>";
}
?>