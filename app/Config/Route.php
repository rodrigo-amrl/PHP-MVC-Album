<?php

namespace App\Config;

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\Admin;
use App\Controllers\Site;


SimpleRouter::get('/', [Site\AlbumController::class, 'index']);
SimpleRouter::get('/album/edit/{id}', [Site\AlbumController::class, 'edit']);
SimpleRouter::get('/album/show/{id}', [Site\AlbumController::class, 'show']);

SimpleRouter::group(['prefix' => 'admin'], function () {

    SimpleRouter::match(['get', 'post'], 'login', [Admin\LoginController::class, 'login']);
});

SimpleRouter::setDefaultNamespace(Site\AlbumController::class);

// Start the routing
SimpleRouter::start();
