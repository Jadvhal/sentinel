<?php

use Nette\Utils\Html;
use duncan3dc\Laravel\Blade;
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

# config function
function config($key){
	$key = strtoupper($key);
	return $_ENV[$key];
}

# HTML render and view template engine
function render(){ return new Html(); }
function view($path, $data = []){ return Blade::render($path, $data);}

function viewPaths($base = views, $paths = []){
	foreach($paths as $path) Blade::addPath("$base/$path");
}

/***************************************
 * Language and localization functions *
 **************************************/

# language and localization function
function __($key){
	$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'].'.json' : 'en.json';
	$term = file_get_contents(locale . '/' . $lang);
	$term = json_decode($term, true);

	return $term[$key] ?? $key;
}

// this function is used by the ___() function
function spin($foo, $bar){	
	if(isset($_SESSION['id'])): return $bar;
		else: return $foo;
	endif;
}

// return output depending on the user's login status
function ___($foo, $bar){
	$key = spin($foo, $bar);
	return __($key);
}

// content iterator function for localization
function __e($key, $el){
	# el sample : li, h1, h2, h3, h4, h5, h6, p, span, a, div, etc
	# key sample : "feature_list" : [  "ብቃት ያላቸው አስተማሪዎች",  "ነጻ እና መስተጋብራዊ ትምህርት",  "AI-Powered ግምገማ" ]

	$key = __($key); $res = '';
	foreach ($key as $value)  $res .= "<$el>$value</$el>";
	
	return $res;
}

/*******************************************
 * End Language and localization functions *
 ******************************************/

?>