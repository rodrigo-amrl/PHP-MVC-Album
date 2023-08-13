<?php

namespace App\Config;

use PDO;

class Database
{
    public $connection;


    public function __construct()
    {
        $this->getInstance();
    }
    public function getInstance()
    {
        if (isset($this->connection)) return $this->connection;
        return $this->init();
    }
    public function init()
    {
        $config  = (object)App::DATABASE;

        return new PDO(
            "mysql:host={$config->host};dbname={$config->dbname};port={$config->port};charset={$config->charset}",
            $config->username,
            $config->password,
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }
    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}
