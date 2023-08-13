<?php

namespace App\Models;

use App\Config\Database;

trait ModelDataBase
{
    public function save()
    {
        dd($this->db_connection);
    }
}
