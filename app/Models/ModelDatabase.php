<?php

namespace App\Models;

use App\Config\Database;

trait ModelDataBase
{
    private $connection;
    public function __construct()
    {
        $this->connection = new Database();
    }
    public function save()
    {
        
        dd($this->connection->query());
    }
}
