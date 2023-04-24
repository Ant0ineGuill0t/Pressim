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
            'admin/back-office',
            [
                'userList' => $userList,
                'orderList' => $orderList,
                'productList' => $productList,
            ]
        );
    }
    public function addProduct()
    {
        $this->show(
            'admin/back-office-product-add'
        );
    }
    public function createProduct()
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, 'price',FILTER_SANITIZE_NUMBER_FLOAT);
        if ($price == false) {
            $this->addError("Le prix n'est pas correct !");
        }     
        if (!empty($_SESSION['errorMessages'])) {
            $this->redirect('back-office');
        } else {
            $newProduct = new Product;
            $newProduct->setName($name);
            $newProduct->setprice($price);
            $newProduct->insert();
            $this->redirect('back-office');
        }
    }
    public function viewUpdateUser($id)
    {
        $userData =  User::find($id['id']);
        $this->show(
            'admin/back-office-user',
            [
                'userData' => $userData
            ]
        );
    }
    public function updateUser($id)
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phoneNumber = filter_input(INPUT_POST, 'phone-number',FILTER_SANITIZE_NUMBER_INT);
        if ($email == false) {
            $this->addError("L'email n'est pas correct !");
        }     
        if ($phoneNumber == false) {
            $this->addError("Le numéro de téléphone n'est pas correct !");
        }     
        if (!empty($_SESSION['errorMessages'])) {
            $this->redirect('back-office');
        } else {
            $newUser = User::find($id['id']);
            $newUser->setName($name);
            $newUser->setEmail($email);
            $newUser->setPhoneNumber($phoneNumber);
            $newUser->update();
            $this->redirect('back-office');
        }
    }
    public function viewUpdateProduct($id)
    {
        $productData =  Product::find($id['id']);
        $this->show(
            'admin/back-office-product',
            [
                'productData' => $productData
            ]
        );
    }
    public function updateProduct($id)
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, 'price',FILTER_SANITIZE_NUMBER_FLOAT);
        if ($price == false) {
            $this->addError("Le prix n'est pas correct !");
        }     
        if (!empty($_SESSION['errorMessages'])) {
            $this->redirect('back-office');
        } else {
            $newProduct = Product::find($id['id']);
            $newProduct->setName($name);
            $newProduct->setprice($price);
            $newProduct->update();
            $this->redirect('back-office');
        }
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