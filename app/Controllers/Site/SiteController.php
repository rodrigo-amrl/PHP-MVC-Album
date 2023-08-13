<?php

namespace App\Controllers\Site;

use App\Controllers\Controller;


class SiteController extends Controller
{
    public function index()
    {
        return $this->view('home');
    }
    public function sobre()
    {
        return $this->view('sobre');
    }
    public function contato()
    {
        return $this->view('contato');
    }
}
