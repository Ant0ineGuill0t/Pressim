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
        $productList = Product::findAll();
        $this->show(
            'back-office',
            [
                'userList' => $userList,
                'orderList' => $orderList,
                'productList' => $productList,
            ]
        );
    }
    public function deleteProduct($id)
    {  
        $productToDelete = Product::find($id['id']);
        if($productToDelete->delete()) {
            $this->redirect('back-office');
        }
    }
    public function deleteUser($id)
    {  
        $userToDelete = User::find($id['id']);
        if($userToDelete->delete()) {
            $this->redirect('back-office');
        }
    }
    public function deleteOrder($id)
    {  
        $orderToDelete = Order::find($id['id']);
        if($orderToDelete->delete()) {
            $this->redirect('back-office');
        }
    }
}