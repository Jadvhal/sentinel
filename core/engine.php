<?php
use Nette\Database\Connection;

function db(){
	$hostname = $_ENV['DB_HOST'];
	$username = $_ENV['DB_USER'];
	$password = $_ENV['DB_PASS'];
	$database = $_ENV['DB_NAME'];

	$connector = "mysql:host=$hostname;dbname=$database";
	
	return new Connection(
		$connector, $username, $password
	);
}

?>