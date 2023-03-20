<?php

namespace Pressim\Controllers;

use Pressim\Models\User;

class MainController extends CoreController {
    public function home()
    {
        $newUser = new User;
        $userList = $newUser->findAll();
        $this->show(
            'home',
            [
                'userList' => $userList
            ]
    );

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