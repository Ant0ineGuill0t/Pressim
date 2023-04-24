<?php

namespace Pressim\Controllers;

use Pressim\Models\User;
use Pressim\Models\Order;
use Pressim\Models\Product;

class AdminController extends CoreController
{
    public function admin(){
        $userList = User::findAll();
        $orderList = Order::findAll();
        $this->show(
            'back-office',
            [
                'userList' => $userList,
                'orderList' => $orderList,
            ]
        );
    }
}