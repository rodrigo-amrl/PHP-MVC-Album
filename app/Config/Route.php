<?php

namespace App\Config;

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\Site;


SimpleRouter::get('/', [Site\SiteController::class, 'index']);
SimpleRouter::get('/sobre', [Site\SiteController::class, 'sobre']);
SimpleRouter::get('/blog', [Site\SiteController::class, 'blog']);
SimpleRouter::get('/contato', [Site\SiteController::class, 'contato']);

SimpleRouter::setDefaultNamespace(Site\SiteController::class);

// Start the routing
SimpleRouter::start();
