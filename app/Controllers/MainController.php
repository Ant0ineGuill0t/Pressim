<?php

namespace Pressim\Controllers;

use Pressim\Models\User;

class MainController extends CoreController 
{
    public function home()
    {
        $newUser = new User();
        $userList = $newUser->findAll();
        $this->show(
            'home',
            [
                'userList' => $userList
            ]
        );
    }

    public function login()
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        if ($email === false) {
            $_SESSION['errorMessages'][]="Email non valide";
        }
        $user = User::findByEmail($email);
        if ($user === false) {
            $_SESSION['errorMessages'][]="Cet utilisateur n'existe pas !";
        } else {
            if (password_verify($password, $user->getPassword())) {
                $_SESSION['user'] = $user;
                $_SESSION['successMessages'][]="Connexion réussie!";
            } else {
                $_SESSION['errorMessages'][]="Le mot de passe n'est pas correct";
            }
        }
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