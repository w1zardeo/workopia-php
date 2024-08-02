<?php
// session_start();
require '../helpers.php';
require __DIR__ . '/../vendor/autoload.php';

// require basePath('Framework/Database.php');
// require basePath('Framework/Router.php');

$config = require basePath('config/db.php');

use Framework\Router;
use Framework\Session;

Session::start();

// inspectAndDie(session_status());

// spl_autoload_register(function ($class) {
//     $path = basePath('Framework/ ' . $class . '.php');
//     if (file_exists($path)) {
//         require $path;
//     }
// });



// $db = new Database($config);

$router = new Router();

$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->route($uri);

?>