<?php

namespace Pressim\Models;

use Pressim\Utils\Database;
use PDO;

class Contact {

    private $id;
    private $name;
    private $email;
    private $message;

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `contact`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;  
    }
    public function insert()
    {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `contact` (email, name, message)
            VALUES (:email,:name,:message)
        ";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':email', $this->email);
        $pdoStatement->bindValue(':name', $this->name);
        $pdoStatement->bindValue(':message', $this->message);
        $success = $pdoStatement->execute();

        if ($success) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        return false;
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
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}