<?php

namespace App\Config;

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers;


SimpleRouter::get('/', [Controllers\Album\AlbumController::class, 'index']);
SimpleRouter::get('/album/edit/{id}', [Controllers\Album\AlbumController::class, 'edit']);
SimpleRouter::get('/album/show/{id}', [Controllers\Album\AlbumController::class, 'show']);


SimpleRouter::setDefaultNamespace(Controllers\Album\AlbumController::class);

// Start the routing
SimpleRouter::start();
