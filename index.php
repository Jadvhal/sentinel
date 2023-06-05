<?php
/*****************************************************
 *     ERROR HANDLER, HANDLES ALL SCRIPT ERRORS      *
 *             EXCEPT SYNTAX ERRORS                  *
 *****************************************************/

session_start();
include 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
$dotenv->safeLoad();

$whoops = new Whoops\Run();
$errorPage = new Whoops\Handler\PrettyPageHandler();

$errorPage->setPageTitle("500");
$errorPage->setEditor("vscode");
 
$whoops->pushHandler($errorPage);
$whoops->register();


/*****************************************************
 *               ALL ROUTES INITIATOR                *
 *       APPLICATION ENVIRONMENTS AND CONSTANTS      *
 *****************************************************/

use core\Route;

include 'core/Route.php';
include 'core/Loader.php';


/*****************************************************
 *     IF YOU NEED TO ADD ANYTHING IT SHOULD BE      *
 *                  FROM DOWN HERE                   *
 *****************************************************/

define('BASEPATH', '/');
define('app',	    'core');
define('views',		'views');
define('cache', 	'cache');
define('locale', 	'locale');
define('controls',	'controls');

# preload views directory
viewPaths(views, ['auth', 'errors', 'public']);

/****************************************************
 *              YOU CAN DEFINE YOUR ROUTES          *
 *                  STARTING FROM HERE              *
 ****************************************************/

Route::add('/', function() {
	return view("welcome");
});

Route::add('/about', function() {
	return view("about");
});

/****************************************************
 *                     API SECTION                  *
 *             DO NOT CHANGE THIS SECTION           *
 ****************************************************/

Route::add('/api/v1/analyze', function() {
	GptZero::init();
}, 'post');


/****************************************************
 *                ERROR PAGES 404, 405              *
 *             DO NOT CHANGE THIS SECTION           *
 ****************************************************/

Route::pathNotFound(function($path) {
	header('HTTP/1.0 404 Not Found');
	echo view("404", ['path' => $path]);
});

Route::methodNotAllowed(function($path, $method) {
	header('HTTP/1.0 405 Method Not Allowed');
	echo view("405", ['method' => $method]);
});

Route::userNotAllowed(function($path, $method) {
	header('HTTP/1.0 403 Forbidden');
	echo view("403");
});

/****************************************************
 *      VIEW REGISTERED ROUTES AND THEIR METHODS    *
 *                  USE THIS SECTION                *
 ****************************************************/
Route::add('/routes', function() {
	$routes = Route::getAll();
	echo '<ul>';
	foreach ($routes as $route) {
		echo '<li>'.$route['expression'].' ('.$route['method'].')</li>';
	}
	echo '</ul>';
});

// Run the Router with the given Basepath
Route::run(BASEPATH);

// Enable case sensitive mode, trailing slashes and multi match mode by setting the params to true
// Route::run(BASEPATH, true, true, true);
