<?php

namespace Pressim\Controllers;

use Pressim\Models\User;

class UserController extends CoreController
{
    
    public function login(){
        $this->show('login');
    }

    public function connect()
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
}