<?php

namespace Pressim\Controllers;

use Pressim\Models\User;

class MainController extends CoreController 
{
    public function home()
    {
        $this->show('home');
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