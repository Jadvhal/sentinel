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


# classes loader
function load_controllers($directory): void {
	if(is_dir($directory)) :
		$scan = scandir($directory);
		unset($scan[0], $scan[1]); # unset . and ..

		# foreach scaned directory recall the function
		foreach($scan as $file):
			if(is_dir($directory."/".$file)):
				load_controllers($directory."/".$file);
			else:
				if(strpos($file, '.php') !== false):
					require_once($directory."/".$file);
				endif;
			endif;
		endforeach;
	endif;
}


# language and localization function
function __($key){
	$lang = $_COOKIE['lang'] ?? 'en';
	$term = file_get_contents(locale . "/$lang.json");
	return json_decode($term)->$key;
}

?>