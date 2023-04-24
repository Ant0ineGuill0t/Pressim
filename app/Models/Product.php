<?php

namespace Pressim\Models;

use Pressim\Utils\Database;
use PDO;

class Product
{
    private $id;
    private $name;
    private $price;

    public static function find($id)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `product`
        WHERE `id` = :id";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $id);
        $pdoStatement->execute();
        $product = $pdoStatement->fetchObject(self::class);
        return $product;
    }
    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `product`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
    }
    public function insert()
    {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `product` (id, name, price)
            VALUES (:id,:name,:price)
        ";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $this->id);
        $pdoStatement->bindValue(':name', $this->name);
        $pdoStatement->bindValue(':price', $this->price);
        $success = $pdoStatement->execute();

        if ($success) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        return false;
    }
    public function delete()
    {
        $pdo = Database::getPDO();
        $sql = " DELETE FROM `product` WHERE `id`= :id ";
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
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}
