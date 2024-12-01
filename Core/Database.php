<?php
namespace Core;
use PDO;
class Database{
    public $connection;
    public $statement;
    public function __construct($config, $username = "root", $password = "cent")
    {
        $dns = 'mysql:' . http_build_query($config, "", ";");
        $this->connection = new PDO($dns, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($query, $params = []){
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }
    public function find(){
        return $this->statement->fetch();
    }
    public function fetchAll(){
        return $this->statement->fetchAll();
    }
    public function findOrfail(){
        $result = $this->find();
        if(! $result){
            abort();
        }
        return $result;
    }
}