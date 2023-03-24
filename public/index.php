<?php

// autoload

require '../vendor/autoload.php';
session_start();

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
    '/login',
    [
        'controller' => 'UserController',
        'method' => 'login',
    ],
    'login'
);
$router->map(
    'POST',
    '/login',
    [
        'controller' => 'UserController',
        'method' => 'connect',
    ],
    'connect'
);
$router->map(
    'GET',
    '/creation-compte',
    [
        'controller' => 'UserController',
        'method' => 'add',
    ],
    'account-add'
);
$router->map(
    'POST',
    '/creation-compte',
    [
        'controller' => 'UserController',
        'method' => 'create',
    ],
    'account-create'
);
$router->map(
    'GET',
    '/logout',
    [
        'controller' => 'UserController',
        'method' => 'logout',
    ],
    'logout'
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
    '/mentions-legales',
    [
        'controller' => 'MainController',
        'method' => 'legalMentions'
    ],
    'legal-mentions'
);
$router->map(
    'GET',
    '/services',
    [
        'controller' => 'MainController',
        'method' => 'benefits',
    ],
    'benefits'
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
    include(__DIR__ . '/../app/views/404.tpl.php');
} else {
    $controllerToUse = $match['target']['controller'];
    $methodToUse = $match['target']['method'];
    $params = $match['params'];
    $controllerToUse = '\\Pressim\\Controllers\\' . $controllerToUse; 
    $controller = new $controllerToUse();
    $controller->$methodToUse($params);
}

?>