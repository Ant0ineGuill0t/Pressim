<?php

namespace Pressim\Controllers;

class MainController extends CoreController {
    public function home()
    {
        $this->show('home');
    }
    public function contact()
    {
        $this->show('contact');
    }
}