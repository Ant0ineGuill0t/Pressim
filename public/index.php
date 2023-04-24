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
        'controller' => 'ContactController',
        'method' => 'contact',
    ],
    'contact'
);
$router->map(
    'POST',
    '/contact',
    [
        'controller' => 'ContactController',
        'method' => 'create',
    ],
    'contact-form'
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
    '/depot',
    [
        'controller' => 'OrderController',
        'method' => 'order',
    ],
    'order-form'
);
$router->map(
    'POST',
    '/depot',
    [
        'controller' => 'OrderController',
        'method' => 'create',
    ],
    'order'
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
$router->map(
    'GET',
    '/admin',
    [
        'controller' => 'AdminController',
        'method' => 'admin',
    ],
    'back-office'
);
$router->map(
    'GET',
    '/admin/product/add',
    [
        'method' => 'addProduct',
        'controller' => 'AdminController'
    ],
    'product-add'
);
$router->map(
    'POST',
    '/admin/product/add',
    [
        'method' => 'createProduct',
        'controller' => 'AdminController'
    ],
    'product-create'
);
$router->map(
    'GET',
    '/admin/product/delete/[i:id]',
    [
        'method' => 'deleteProduct',
        'controller' => 'AdminController'
    ],
    'product-delete'
);
$router->map(
    'GET',
    '/admin/user/delete/[i:id]',
    [
        'method' => 'deleteUser',
        'controller' => 'AdminController'
    ],
    'user-delete'
);
$router->map(
    'GET',
    '/admin/order/delete/[i:id]',
    [
        'method' => 'deleteOrder',
        'controller' => 'AdminController'
    ],
    'order-delete'
);
$router->map(
    'GET',
    '/admin/user/update/[i:id]',
    [
        'method' => 'viewUpdateUser',
        'controller' => 'AdminController'
    ],
    'user-viewUpdate'
);
$router->map(
    'POST',
    '/admin/user/update/[i:id]',
    [
        'method' => 'updateUser',
        'controller' => 'AdminController'
    ],
    'user-update'
);
$router->map(
    'GET',
    '/admin/product/update/[i:id]',
    [
        'method' => 'viewUpdateProduct',
        'controller' => 'AdminController'
    ],
    'product-viewUpdate'
);
$router->map(
    'POST',
    '/admin/product/update/[i:id]',
    [
        'method' => 'updateProduct',
        'controller' => 'AdminController'
    ],
    'product-update'
);
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