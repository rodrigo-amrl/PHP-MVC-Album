<?php

namespace App\Controllers\Client;

use App\Controllers\Controller;


class ClientController extends Controller
{


    public function __construct()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
    public function index()
    {
        return $this->view('pages/home/home');
    }
}
