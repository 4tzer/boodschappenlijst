<?php
require 'tools.php';
require 'Request.php';


$query = require 'core/bootstrap.php'; // setup PDO

$router = new router;

require 'routes.php';
//xdump($router);
//var_dump($_SERVER['REQUEST_URI']);
// var_dump($router);


require  Router::Load('routes.php')
 ->direct(Request::uri(), Request::method());

// xdump($uri);
// require $router->direct($uri);


// require $router->direct($uri);
