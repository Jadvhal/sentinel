<?php
namespace core;

class Database{
	public static function conn(){
		$servername = "localhost";
		$username   = "root";
		$password   = "";
		$database   = "mani";
		$conn = new mysqli($servername, $username, $password, $database);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		return $conn;
	}
}

class Site{
	public static  function configs(){
		$conn  = Database::conn();
		$query = "SELECT key, value FROM config";
		$query = $conn->query($query);

		if ($query->num_rows > 0) {
			$config = $query->fetch_all(MYSQLI_ASSOC);
		} else {
			$config = 0;
		}

		return $config;
	}
}
?>