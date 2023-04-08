<?php

namespace App\Controllers;

use App\Config\App;

class Controller
{
    public function __construct()
    {
    }
    public function view($file, $data = [])
    {
        $file = BASE_VIEW . $file . '.php';

        return file_exists($file) ? require($file) : '';
    }
}
