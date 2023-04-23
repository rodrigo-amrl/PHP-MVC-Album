<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;


class LoginController extends Controller
{
    const PATH_ADMIN = 'admin/pages/';


    public function __construct()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
    public function login()
    {
        if (!empty(input()->all())) {
            print_r(input()->all());
            die();
        }

        return view('login', layout: 'layout_clear', path: self::PATH_ADMIN);
    }
    public function show()
    {
        return view('album/show/album_show');
    }
    public function edit($id)
    {
        return view('album/edit');
    }
}
