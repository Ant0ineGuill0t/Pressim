<?php

namespace Pressim\Controllers;

use Pressim\Models\Contact;

class ContactController extends CoreController
{
    public function contact()
    {
        $this->show('contact');
    }
    public function create()
    {
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