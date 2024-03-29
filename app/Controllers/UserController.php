<?php

namespace Pressim\Controllers;

use Pressim\Models\User;

class UserController extends CoreController
{
    public function login()
    {
        $token = $this->generateCSRFToken();
        $this->show('login', ['token' => $token ]);
    }

    public function connect()
    {
        if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            $this->addError("Jeton CSRF invalide");
            $this->redirect('home');
        } else {
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, 'password');
            $regex = '/^(?=.*[A-Z])(?=.*\d).{8,}$/';
            
            if ($email === false) {
                $_SESSION['errorMessages'][]="Email non valide";
            }
            if (preg_match($regex, $password)) {
                $user = User::findByEmail($email);
                if ($user === false) {
                    $_SESSION['errorMessages'][]="Cet utilisateur n'existe pas !";
                } else {
                    if (password_verify($password, $user->getPassword())) {
                        $_SESSION['user'] = $user;
                        $_SESSION['successMessages'][]="Connexion réussie!";
                        $this->redirect('home');
                    } else {
                        $_SESSION['errorMessages'][]="Le mot de passe n'est pas correct";
                        $this->redirect('login');
                    }
                }
            } else {
                $_SESSION['errorMessages'][]="Le mot de passe doit comporter 8 caratères minimum, 1 majuscule et 1 chiffre";
                $this->redirect('login');
            }
        }
    }
    public function logout()
    {
        if(isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            $_SESSION['successMessages'][] = "Déconnexion réussie, à bientot !";
            $this->redirect('home');
        }
    }
    public function add()
    {
        $token = $this->generateCSRFToken();
        $this->show('account-add', ['token' => $token ]);
    }
    public function create()
    {
        if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            $this->addError("Jeton CSRF invalide");
            $this->redirect('home');
        } else {
            $email = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, 'password');
            $confirmedPassword = filter_input(INPUT_POST, 'confirmed-password');
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $phoneNumber = filter_input(INPUT_POST, 'phone-number');
            $role = 1;
            $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
            $user = User::findByEmail($email);

            if ($email === false) {
                $this->addError("L'email n'est pas valide !");
            }
            if ($name === false) {
                $this->addError("Veuillez indiquer un nom valide !");
            }
            if ($phoneNumber === false) {
                $this->addError("Le numéro de téléphone n'est pas valide !");
            }
            if (!preg_match($regex, $password)) {
                $this->addError("Le mot de passe n'est pas valide !");
            }
            if ($password != $confirmedPassword) {
                $this->addError("les mots de passes ne sont pas identiques !");
            }
            if ($user === false) {
                if (!empty($_SESSION['errorMessages'])) {
                    $this->redirect('account-add');
                } else {
                    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
                    $newUser = new User();
                    $newUser->setEmail($email);
                    $newUser->setPassword($hashPassword);
                    $newUser->setName($name);
                    $newUser->setPhoneNumber($phoneNumber);
                    $newUser->setRole($role);
                    $success = $newUser->insert();
                    if($success) {
                        $_SESSION['successMessages'][] = "Utilisateur bien créé !";
                        $this->redirect('login');
                    }
                }
            } else {
                $this->redirect('account-add');
                $this->addError("L'email est déja utilisé !");
            }
        }
    }
}