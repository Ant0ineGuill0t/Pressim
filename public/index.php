<?php

// autoload

require '../vendor/autoload.php';

// Debug mode
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// Start Altorouter
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

// Map routes

$router->map(
    'GET',
    '/',
    [
        'controller' => 'MainController',
        'method' => 'home',
    ],
    'home'
);
$router->map(
    'GET',
    '/contact',
    [
        'controller' => 'MainController',
        'method' => 'contact',
    ],
    'contact'
);
$router->map(
    'GET',
    '/404',
    [
        'controller' => 'MainController',
        'method' => '404',
    ],
    '404'
);

// Match routes
$match = $router->match();

if(!is_array($match)) {
    exit('404');
} else {
    $controllerToUse = $match['target']['controller'];
    $methodToUse = $match['target']['method'];
    $params = $match['params'];
    $controllerToUse = '\\Pressim\\Controllers\\' . $controllerToUse; 
    $controller = new $controllerToUse();
    $controller->$methodToUse($params);
}

?>