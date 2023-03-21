<?php

namespace Pressim\Controllers;

class CoreController 
{

    protected function show($viewName, $viewData = [])
    {
        global $router;
        $baseUri = $_SERVER['BASE_URI'] ?? '';
        $viewData['baseUri'] = $baseUri;

        require __DIR__ . "/../views/header.tpl.php";
        require __DIR__ . "/../views/" . $viewName  .  ".tpl.php";
        require __DIR__ . "/../views/footer.tpl.php";
    }
}