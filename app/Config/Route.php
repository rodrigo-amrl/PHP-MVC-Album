<?php

namespace App\Config;

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\Site;


SimpleRouter::get('/', [Site\SiteController::class, 'index']);
SimpleRouter::get('/sobre', [Site\SiteController::class, 'sobre']);
SimpleRouter::get('/blog', [Site\BlogController::class, 'index']);
SimpleRouter::get('/blog/novo', [Site\BlogController::class, 'novo']);
SimpleRouter::post('/blog/novo', [Site\BlogController::class, 'novo']);

SimpleRouter::get('/contato', [Site\SiteController::class, 'contato']);

SimpleRouter::setDefaultNamespace(Site\SiteController::class);
SimpleRouter::error(function () {

    return view('not_found');
});
// Start the routing
SimpleRouter::start();
