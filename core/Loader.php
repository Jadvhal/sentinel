<?php
# class loader
function load_classphp($directory) {
	if(is_dir($directory)) {
		$scan = scandir($directory);
		unset($scan[0], $scan[1]); //unset . and ..
		foreach($scan as $file) {
			if(is_dir($directory."/".$file)) {
				load_classphp($directory."/".$file);
			} else {
				if(strpos($file, '.php') !== false) {
					require_once($directory."/".$file);
				}
			}
		}
	}
}


# language and localization function
function __($key){
	$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'].'.json' : 'en.json';
	$term = file_get_contents(locale . '/' . $lang);
	$term = json_decode($term, true);

	return $term[$key];
}

# load the systems core files
require_once 'Configuration.php';
load_classphp('controls');
?>
