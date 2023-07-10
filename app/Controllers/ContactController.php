<?php

namespace Pressim\Controllers;

use Pressim\Models\Contact;

class ContactController extends CoreController
{
    public function contact()
    {
        $token = $this->generateCSRFToken();
        $this->show('contact', ['token' => $token ]);
    }
    public function create()
    {
        if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            $this->addError("Jeton CSRF invalide");
            $this->redirect('home');
        }
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
        var_dump($email, $name, $message);
        if ($email === false) { 
            $this->addError("L'email n'est pas valide !");
        }
        if ($name === false) {
            $this->addError("Veuillez indiquer un nom valide !");
        } 
        if ($message === false) {
            $this->addError("Il y a un soucis dans votre message !");
        } 
        $newContact = new Contact;
        $newContact->setEmail($email);
        $newContact->setName($name);
        $newContact->setMessage($message);
        $success = $newContact->insert();
        if($success) {
            $_SESSION['successMessages'][] = "Message bien envoyé !";
            $this->redirect('home');
        }
    }
}