<?php

namespace App\Controllers\Site;

use App\Controllers\Controller;


class SiteController extends Controller
{


    public function __construct()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
    public function index()
    {
        return view('home');
    }
    public function sobre()
    {
        return view('sobre');
    }
    public function contato()
    {
        return view('contato');
    }
}
