<?php

$hostname = "localhost";

$username = "f4371819_seeker";

$password = "seeker@service";

$database = "f4371819_dbservjoint";

echo "test: ";
echo $hostname;

$mysqli = mysqli_connect($hostname, $username, $password, $database);
if (!$mysqli) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
echo 'Connected to MySQL';

?>