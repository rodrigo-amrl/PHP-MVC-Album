<?php

// return [
//     'BASE_URL' => "http://127.0.0.1:8000",
//     'VITE_URL' => "http://localhost:5173",
//     'DATABASE' => [
//         'host' => "localhost",
//         'port' => 3306,
//         'dbname' => 'projeto',
//         'charset' => 'utf8mb4'
//     ]
// ];

namespace App\Config;

class App
{
    const BASE_URL = "http://127.0.0.1:8000";

    const VITE_URL = "http://localhost:5173";

    const DATABASE = [
        'host' => "127.0.0.1",
        'database' => 'projeto',
        'user' => "root",
        'password' => '1234'
    ];
}
