<?php
// Environments and essential file
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

// If your script lives in a subfolder you can use the following example
// Do not forget to edit the basepath in .htaccess if you are on apache
// define('BASEPATH','/api/v1');
// Add base route (startpage)
Route::add('/', function() {
    return Blade::render("welcome", ['host'=>config('db_host')]);
});

Route::add('/test', function() {
    //
});

// 405 test
Route::add('/this-route-is-defined', function() {
    echo 'You need to patch this route to see this content';
}, 'patch');

// Add a 404 not found route
Route::pathNotFound(function($path) {
    echo Blade::render("404", ['path' => $path]);
});

// Add a 405 method not allowed route
Route::methodNotAllowed(function($path, $method) {
    // Do not forget to send a status header back to the client
    // The router will not send any headers by default
    // So you will have the full flexibility to handle this case
    header('HTTP/1.0 405 Method Not Allowed');
    return Blade::render("error.405");
    echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
});

// Return all known routes
Route::add('/known-routes', function() {
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