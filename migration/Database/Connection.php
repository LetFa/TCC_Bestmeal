<?php

class Connection {
    private $host = 'localhost';
    private $dbname = 'banco_testes';
    private $dbuser = 'root';
    private $dbpasswd = '';

    protected $connection;

    public function __construct() {
        $this->connectDatabase();
    }

    function connectDatabase() {
        try {
            
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->dbuser, $this->dbpasswd);

        }catch(PDOException $error) {
            echo "Não foi possível conectar ao banco de dados" . $error->getMessage();
        }
    }
}