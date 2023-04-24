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

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `order`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;  
    }
    public function insert()
    {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `order` (deposit_date, recovery_date, amount, pants, jacket, shirt, coat, skirt)
            VALUES (:deposit_date,:recovery_date,:amount,:pants,:jacket, :shirt, :coat, :jacket)
        ";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':deposit_date', $this->deposit_date);
        $pdoStatement->bindValue(':recovery_date', $this->recovery_date);
        $pdoStatement->bindValue(':amount', $this->amount);
        $pdoStatement->bindValue(':pants', $this->pants);
        $pdoStatement->bindValue(':jacket', $this->jacket);
        $pdoStatement->bindValue(':shirt', $this->shirt);
        $pdoStatement->bindValue(':coat', $this->coat);
        $pdoStatement->bindValue(':skirt', $this->skirt);
        $success = $pdoStatement->execute();

        if ($success) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    } 
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
     * Set the value of depositDate
     *
     * @return  self
     */ 
    public function setDepositDate($deposit_date)
    {
        $this->deposit_date = $deposit_date;
        return $this;
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
     * Get the value of jacket
     */ 
    public function getJacket()
    {
        return $this->jacket;
    }
    /**
     * Set the value of jacket
     *
     * @return  self
     */ 
    public function setJacket($jacket)
    {
        $this->jacket = $jacket;
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