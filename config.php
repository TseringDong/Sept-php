<?php 
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'sept_php';
$conn = new mysqli($serverName, $username, $password, $dbName);

if($conn->connect_error) {
	die('Failed:' . $conn->connect_error);
}