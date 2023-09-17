<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];//removes query string from request uri

$routes = require('routes.php');//pulls in the routes array

if (array_key_exists($uri, $routes)){//checks if the provided key (uri) exists in the array. If if does requires each uri/crontoller if applicable
   require ($routes[$uri]); 
} 