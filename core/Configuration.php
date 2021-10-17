<?php

function conn(){
	$servername = $_ENV['DB_HOST'];
	$username   = $_ENV['DB_USER'];
	$password   = $_ENV['DB_PASS'];
	$database   = $_ENV['DB_DATA'];
	$conn = new mysqli($servername, $username, $password, $database);
	if ($conn->connect_error) {
		include 'views/errors/db.html';
		die("Connection failed: ");
	}
	
	return $conn;
}

?>