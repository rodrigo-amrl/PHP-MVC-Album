<?php

namespace App\Config;

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers; 


SimpleRouter::get('/', [Controllers\Client\ClientController::class, 'index']);


SimpleRouter::setDefaultNamespace(Controllers\Client\ClientController::class);

// Start the routing
SimpleRouter::start();
