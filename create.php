<?php
require 'config.php'

$sql = "insert into users (name, age, phone, address) values ('Subin', 12, '9849009988', 'Nepal')";
$insert = $conn->query($sql);

if($insert === TRUE) {
	echo "Successfully Created";
} else {
	echo "Error: " . $conn->error;
}

// $x = 99;
// $x == '99'; //matches and return TRUE/FALSE
// $x === 99;  // matches value as well as data type and returns TRUE/FALSE