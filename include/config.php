<?php
//define constants for connection info
define("MYSQLUSER","team15nov18");
define("MYSQLPASS","123456");
define("HOSTNAME","localhost");
define("MYSQLDB","team15nov18_assignment");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>





