<?php

$conn = "";

try {
	$servername = "35.232.10.42";
	$dbname = "admin";
	$username = "web-db-user";
	$password = "root";

	$conn = new PDO(
		"mysql:host=$servername; dbname=admin",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>

