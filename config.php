<!-- Connect to DB -->
<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "bankdb";

$conn = mysqli_connect($serverName, $username, $password, $dbname);

if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}
	?>