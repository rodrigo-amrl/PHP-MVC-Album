<?php

namespace App\Controllers\Album;

use App\Controllers\Controller;


class AlbumController extends Controller
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
    public function show()
    {
        return view('album/show/album_show');
    }
    public function edit($id)
    {
        return view('album/edit');
    }
}
