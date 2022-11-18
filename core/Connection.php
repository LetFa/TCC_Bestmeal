<?php

class Connection {
    private $host = "localhost";
    private $dbname = 'bestmeal';
    private $dbuser = 'root';
    private $dbpasswd = '';

    protected $connection;

    public function __construct() {
        $this->connectDatabase();
    }

    function connectDatabase() {
        try { //tentar
            $this->connection =  new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->dbuser, $this->dbpasswd);
        }catch(\PDOException $error){ 
            echo "Não foi possível conectar! " . $error->getMessage();
            die;
        }
    }

    public function pesquisa($tabela) {
        // Pesquisar todos os usuários no banco
        $pesquisa = $this->connection->query("SELECT * FROM $tabela");
        //Traduzir os dados que vem do banco para o PHP
        $resultado = $pesquisa->fetchAll();
        return $resultado;
    }
}