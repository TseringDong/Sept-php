<?php 
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'sept_php';
$conn = new mysqli($serverName, $username, $password, $dbName);

if($conn->connect_error) {
	die('Failed:' . $conn->connect_error);
}

echo "Connected successfully";
$conn-> close();

//User Define Funtions
function getAgeLevel($name, $age) {
	if ($age) {
		if($age < 20) {
			return "Young";
		}elseif ($age < 50) {
			return "Middle Aged";
		}else {
			return "Too Old"
		}
	}
}
//echo getAgeLevel("John",0);
//