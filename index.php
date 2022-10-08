<?php
/*****************************************************
 *     ERROR HANDLER, HANDLES ALL SCRIPT ERRORS      *
 *             EXCEPT SYNTAX ERRORS                  *
 *****************************************************/
session_start();
include 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
$dotenv->load();

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
use duncan3dc\Laravel\Blade;

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
define('controls',	'controls');
define('locale', 	'localization');

// Define views global paths
Blade::addPath(views.'/auth');
Blade::addPath(views.'/errors');
Blade::addPath(views.'/public');

/****************************************************
 *              YOU CAN DEFINE YOUR ROUTES          *
 *                  STARTING FROM HERE              *
 ****************************************************/

Route::add('/', function() {
    return Blade::render("welcome");
});


/****************************************************
 *                 AUTHENTICATICATION               *
 *             DO NOT CHANGE THIS SECTION           *
 ****************************************************/

Route::add('/login', function() {
    return Blade::render("login");
});

Route::add('/register', function() {
    return Blade::render("register");
});

Route::add('/reset', function() {
    return Blade::render("reset");
});

/****************************************************
 *                ERROR PAGES 404, 405              *
 *             DO NOT CHANGE THIS SECTION           *
 ****************************************************/

Route::pathNotFound(function($path) {
	header('HTTP/1.0 404 Not Found');
	echo Blade::render("404", ['path' => $path]);
});

Route::methodNotAllowed(function($path, $method) {
	header('HTTP/1.0 405 Method Not Allowed');
	echo Blade::render("405", ['method' => $method]);
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
