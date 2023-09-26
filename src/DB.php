<?php

namespace App;

use PDO;
use PDOException;

class DB {
    private $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:db.sqlite");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all($table,$class){
        $stmt = $this->conn->prepare("SELECT * FROM  $table");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    public function find($table,$class,$id){
        $stmt = $this->conn->prepare("SELECT * FROM  $table WHERE id=$id");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetch();
    }

    public function insert($table, $fields){
        unset($fields['id']);
        $fieldNameText = implode(', ', array_keys($fields));
        $fieldValuesText = implode("', '", $fields);
        $sql = "INSERT INTO $table ($fieldNameText)
        VALUES ('$fieldValuesText')";

        $this->conn->exec($sql);
    }

    public function update($table, $fields){
        $id=$fields['id'];
        unset($fields['id']);
        $setText= '';
        foreach($fields as $field=>$value){
            $setText .= "$field='$value',";
        }
        $setText = rtrim($setText, ",");
        $sql = "UPDATE $table SET $setText WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function delete($table, $id){
        $sql = "DELETE FROM $table WHERE id=$id";
        $this->conn->exec($sql);
    }

    public function where($table, $class, $field, $value){
        $stmt = $this->conn->prepare("SELECT * FROM  $table WHERE $field='$value'");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

}
