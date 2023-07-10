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

    public static function find($id)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `user`
        WHERE `id` = :id";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $id);
        $pdoStatement->execute();
        $user = $pdoStatement->fetchObject(self::class);
        return $user;
    }
    public static function findByEmail($email)
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

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `user`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;  
    }
    public function insert()
    {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `user` (email, password, name, phone_number, role)
            VALUES (:email,:password,:name,:phone_number,:role)
        ";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':email', $this->email);
        $pdoStatement->bindValue(':password', $this->password);
        $pdoStatement->bindValue(':name', $this->name);
        $pdoStatement->bindValue(':phone_number', $this->phone_number);
        $pdoStatement->bindValue(':role', $this->role);
        $success = $pdoStatement->execute();

        if ($success) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        return false;
    }
    public function update()
    {
        $pdo = Database::getPDO();
        $sql = "
            UPDATE `user`
            SET
                email = :email,
                name = :name,
                phone_number = :phone_number
            WHERE id = :id    
        ";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':email', $this->email);
        $pdoStatement->bindValue(':name', $this->name);
        $pdoStatement->bindValue(':phone_number', $this->phone_number);
        $pdoStatement->bindValue(':id', $this->id);
        $pdoStatement->execute();
    }
    public function delete()
    {
        $pdo = Database::getPDO();
        $sql = " DELETE FROM `user` WHERE `id`= :id ";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $this->id);
        $success = $pdoStatement->execute();
        return $success;
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
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
        /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}