<?php

namespace Pressim\Models;

use Pressim\Utils\Database;
use PDO;

class User {

    private $id;
    private $name;
    private $email;
    private $password;
    private $phonenumber;

    public function find($email)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `user`
        WHERE `email` = :email";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':email', $email);
        $pdoStatement->execute();
        $user = $pdoStatement->fetchObject(self::class);
        return $user;
    }

    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `user`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;  
    }
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
    /**
     * Get the value of phonenumber
     */ 
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phonenumber
     *
     * @return  self
     */ 
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

}