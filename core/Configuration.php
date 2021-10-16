<?php
namespace core;

class Database{
	public static function conn(){
		$servername = config('db_host');
		$username   = config('db_user');
		$password   = config('db_pass');
		$database   = config('db_data');
		$conn = new mysqli($servername, $username, $password, $database);
		if ($conn->connect_error) {
			include 'views/errors/db.html';
			die("Connection failed: " . $conn->connect_error);
		}
		
		return $conn;
	}
}
?>