<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "db_vegetable_system";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=db_vegetable_system",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
