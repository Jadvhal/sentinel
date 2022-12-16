<?php
# class loader
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
	$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'].'.json' : 'en.json';
	$term = file_get_contents(locale . '/' . $lang);
	$term = json_decode($term, true);

	return $term[$key];
}

# load the systems core files
require_once 'engine.php';
load_controllers('controls');
?>
