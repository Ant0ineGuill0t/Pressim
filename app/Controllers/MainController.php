<?php

namespace Pressim\Controllers;

class MainController extends CoreController {
    public function home()
    {
        $this->show('home');
    }
}