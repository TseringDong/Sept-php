
<?php
require 'config.php';

$sql = "select * from users";
$result = $conn->query($sql);
if(result->num_rows > 0) {
	//fetches the value one by one from the query
	while($row = $result->cubrid_fetch_assoc(result)) {
		echo "id:" . $row["id"] . "<br>name: " . $row["name"] . "<br>". $row["address"];
	}
} else {
	echo 
}



