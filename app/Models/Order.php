<?php

namespace Pressim\Models;

use Pressim\Utils\Database;
use PDO;

class Order {

    private $id;
    private $deposit_date;
    private $recovery_date;
    private $pants;
    private $jacket;
    private $shirt;
    private $coat;
    private $skirt;

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
    /**
     * Get the value of depositDate
     */ 
    public function getDepositDate()
    {
        return $this->deposit_date;
    }
    /**
     * Get the value of recoveryDate
     */ 
    public function getRecoveryDate()
    {
        return $this->recovery_date;
    }
    /**
     * Set the value of recoveryDate
     *
     * @return  self
     */ 
    public function setRecoveryDate($recovery_date)
    {
        $this->recovery_date = $recovery_date;
        return $this;
    }
    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get the value of pants
     */ 
    public function getPants()
    {
        return $this->pants;
    }
    /**
     * Set the value of pants
     *
     * @return  self
     */ 
    public function setPants($pants)
    {
        $this->pants = $pants;
        return $this;
    }
    /**
     * Get the value of shirt
     */ 
    public function getShirt()
    {
        return $this->shirt;
    }
    /**
     * Set the value of shirt
     *
     * @return  self
     */ 
    public function setShirt($shirt)
    {
        $this->shirt = $shirt;
        return $this;
    }
    /**
     * Get the value of coat
     */ 
    public function getCoat()
    {
        return $this->coat;
    }
    /**
     * Set the value of coat
     *
     * @return  self
     */ 
    public function setCoat($coat)
    {
        $this->coat = $coat;
        return $this;
    }
    /**
     * Get the value of skirt
     */ 
    public function getSkirt()
    {
        return $this->skirt;
    }
    /**
     * Set the value of skirt
     *
     * @return  self
     */ 
    public function setSkirt($skirt)
    {
        $this->skirt = $skirt;
        return $this;
    }
}
