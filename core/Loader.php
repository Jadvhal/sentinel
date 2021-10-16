<?php
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

function config($conf){
	$environment = $_ENV[strtoupper($conf)];
	return $environment;
}

require_once 'Configuration.php';
load_classphp('controls');
?>