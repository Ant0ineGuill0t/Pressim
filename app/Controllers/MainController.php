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
    public function legalMentions()
    {
        $this->show('legal-mentions');
    } 
    public function benefits()
    {
        $this->show('benefits');
    }
}