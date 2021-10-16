<?php
/****************************************************
 *     APPLICATION ENVIRONMENTS AND CONSTANTS       *
 *                  DEFINITION                      *
 *****************************************************/
use core\Route;
use duncan3dc\Laravel\Blade;

// Load the router and vendor classes
include 'core/Route.php';
include 'vendor/autoload.php';
include 'core/Loader.php';

// dotenv file loader
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
$dotenv->load();

//Exceptions Handler
include 'core/Exceptions.php';
\php_error\reportErrors();

// Define a global basepath
define('BASEPATH', '/');
define('controls',	'controls');
define('app',	    'core');
define('views',		'views');
define('cache', 	'cache');

// Define views global paths
Blade::addPath(views.'/errors');
Blade::addPath(views.'/public');
define('layout', views.'/layout');


/****************************************************
 *              YOU CAN DEFINE YOUR ROUTES          *
 *                  STARTING FROM HERE              *
 ****************************************************/

Route::add('/', function() {
    return Blade::render("welcome");
});

Route::add('/test', function() {
    echo 'hi there, welcome to the DyF family';
});


/****************************************************
 *                ERROR PAGES 404, 405              *
 *             DO NOT CHANGE THIS SECTION           *
 ****************************************************/

Route::pathNotFound(function($path) {
    echo Blade::render("404", ['path' => $path]);
});

Route::methodNotAllowed(function($path, $method) {
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