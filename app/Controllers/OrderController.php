<?php

namespace Pressim\Controllers;

use Pressim\Models\Order;
use Pressim\Models\Product;
use Pressim\Models\User;

class OrderController extends CoreController 
{
    public function order()
    {
        $products = Product::findAll();
        if(isset($_SESSION['user'])){
            $token = $this->generateCSRFToken();
            $this->show(
                'order',
                [
                    'token' => $token,
                    'products' => $products,
                ]
            );
        } else {
            $this->addError("Vous devez vous connecter pour consulter cette page !");
            $this->redirect('home');
        }
    }
    public function create()
    {
        if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            $this->addError("Jeton CSRF invalide");
            $this->redirect('home');
          }
        $depositDate = filter_input(INPUT_POST, 'deposit-date');
        $recoveryDate = filter_input(INPUT_POST, 'recovery-date');
        $amount = filter_input(INPUT_POST, 'amount',FILTER_SANITIZE_NUMBER_INT);
        $shirt = filter_input(INPUT_POST, 'shirt',FILTER_SANITIZE_NUMBER_INT);
        $pants = filter_input(INPUT_POST, 'pants',FILTER_SANITIZE_NUMBER_INT);
        $skirt = filter_input(INPUT_POST, 'skirt',FILTER_SANITIZE_NUMBER_INT);
        $jacket = filter_input(INPUT_POST, 'jacket',FILTER_SANITIZE_NUMBER_INT);
        $coat = filter_input(INPUT_POST, 'coat',FILTER_SANITIZE_NUMBER_INT);
        $depositDate = preg_replace("/[^0-9\-]/", "", $depositDate);
        $sanitizeDepositDate= date("Y-m-d", strtotime($depositDate));
        $formattedRecoveryDate = str_replace('/', '-', $recoveryDate);
        $recoveryDate = preg_replace("/[^0-9\-]/", "", $formattedRecoveryDate);
        $sanitizeRecoveryDate= date("Y-m-d", strtotime($recoveryDate));
        $user = $_SESSION['user'];
        $user_id = $user->getId();
        $newOrder = new Order;
        $newOrder->setDepositDate($sanitizeDepositDate);
        $newOrder->setRecoveryDate($sanitizeRecoveryDate);
        $newOrder->setAmount($amount);
        $newOrder->setShirt($shirt);
        $newOrder->setPants($pants);
        $newOrder->setSkirt($skirt);
        $newOrder->setJacket($jacket);
        $newOrder->setCoat($coat);
        $newOrder->setUserId($user_id);
        $success = $newOrder->insert();
        if($success) {
            $_SESSION['successMessages'][] = "Commande numéro ". $newOrder->getId() . " bien crée !";
            $this->redirect('home');
        }
    }
}
