<?php

namespace Pressim\Controllers;

use Pressim\Models\Order;

class OrderController extends CoreController 
{
    public function order()
    {
        $this->show('order');
    }
    public function create()
    {
        $depositDate = filter_input(INPUT_POST, 'deposit-date');
        $recoveryDate = filter_input(INPUT_POST, 'recovery-date');
        $amount = filter_input(INPUT_POST, 'amount',FILTER_SANITIZE_NUMBER_INT);
        $shirt = filter_input(INPUT_POST, 'chemise',FILTER_SANITIZE_NUMBER_INT);
        $pants = filter_input(INPUT_POST, 'pantalon',FILTER_SANITIZE_NUMBER_INT);
        $skirt = filter_input(INPUT_POST, 'jupe',FILTER_SANITIZE_NUMBER_INT);
        $jacket = filter_input(INPUT_POST, 'veste',FILTER_SANITIZE_NUMBER_INT);
        $coat = filter_input(INPUT_POST, 'manteau',FILTER_SANITIZE_NUMBER_INT);

        $depositDate = preg_replace("/[^0-9\-]/", "", $depositDate);
        $sanitizeDepositDate= date("Y-m-d", strtotime($depositDate));
        $formattedRecoveryDate = str_replace('/', '-', $recoveryDate);
        $recoveryDate = preg_replace("/[^0-9\-]/", "", $formattedRecoveryDate);
        $sanitizeRecoveryDate= date("Y-m-d", strtotime($recoveryDate));
        $newOrder = new Order;
        $newOrder->setDepositDate($sanitizeDepositDate);
        $newOrder->setRecoveryDate($sanitizeRecoveryDate);
        $newOrder->setAmount($amount);
        $newOrder->setShirt($shirt);
        $newOrder->setPants($pants);
        $newOrder->setSkirt($skirt);
        $newOrder->setJacket($jacket);
        $newOrder->setCoat($coat);
        $success = $newOrder->insert();
        if($success) {
            $_SESSION['successMessages'][] = "Commande bien crée !";
            $this->redirect('home');
        }
    }
}
