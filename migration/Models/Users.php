<?php

require __DIR__ . "/../Database/Connection.php";

class Users extends Connection {
    private $table;

    public function __construct() {
        parent::__construct();
        $this->table = 'users';
    }

    public function getAllUsers() {
        $sqlSelect = $this->connection->query("SELECT * FROM $this->table");

        $resultQuery = $sqlSelect->fetchAll();

        return $resultQuery;
    }

    public function getEmail($email) {
        $sqlSelect = $this->connection->query("SELECT * FROM $this->table WHERE email = '$email' ");
        $resultQuery = $sqlSelect->fetch(PDO::FETCH_ASSOC);
        return $resultQuery;
    }

    public function getById($id) {
        $sqlSelect = $this->connection->query("SELECT * FROM $this->table  WHERE id = '$id' ");
        $resultQuery = $sqlSelect->fetch(PDO::FETCH_ASSOC);
        return $resultQuery;
    }

    public function delete($id) {
        $sqlSelect = $this->connection->query("DELETE FROM $this-> table WHERE id = $id ");
    }
    
}