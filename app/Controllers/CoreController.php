<?php

namespace Pressim\Controllers;

class CoreController 
{
    public $router;

    public function checkAuthorization($roles)
    {
        if(isset($_SESSION['user'])) {
            $connectedUser = $_SESSION['user'];
            $userRole = $connectedUser->getRole();
            if(in_array($userRole, $roles)) {
                return true;
            } else {
                http_response_code(403);
                $this->show('403');
                exit;
            }
        }
    }
    public function generateCSRFToken()
    {
        $bytes = random_bytes(10);
        $token =  bin2hex($bytes);
        $_SESSION['csrf_token'] = $token;
        return $token;
    }
    protected function show($viewName, $viewData = [])
    {
        global $router;
        $baseUri = $_SERVER['BASE_URI'] ?? '';
        $viewData['baseUri'] = $baseUri;
        extract($viewData);
        require __DIR__ . "/../views/header.tpl.php";
        require __DIR__ . "/../views/" . $viewName  . ".tpl.php";
        require __DIR__ . "/../views/footer.tpl.php";
    }
    
    public function redirect($routeName)
    {
        global $router;
        header('Location: ' . $router->generate($routeName));
        exit;
    }
    public function addError($message)
    {
        $_SESSION['errorMessages'][] = $message;
    }
}
