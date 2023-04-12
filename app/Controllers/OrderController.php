<?php

namespace Pressim\Controllers;


class OrderController extends CoreController 
{
    public function order()
    {
        $this->show('order');
    }
    public function create()
    {
        $chemise = filter_input(INPUT_POST, 'chemise',FILTER_SANITIZE_NUMBER_INT);
        $pantalon = filter_input(INPUT_POST, 'pantalon',FILTER_SANITIZE_NUMBER_INT);
        $jupe = filter_input(INPUT_POST, 'jupe',FILTER_SANITIZE_NUMBER_INT);
        $veste = filter_input(INPUT_POST, 'veste',FILTER_SANITIZE_NUMBER_INT);
        $manteau = filter_input(INPUT_POST, 'manteau',FILTER_SANITIZE_NUMBER_INT);
        
    }
}
