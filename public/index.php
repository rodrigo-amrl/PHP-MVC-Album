<?php

use App\Config\Database;

require_once '../vendor/autoload.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('BASE_DIR', __DIR__);
define('BASE_VIEW', __DIR__ . '/../resources/views/');



require_once  '../app/Config/Database.php';
// $config = require  '../app/Config/App.php';
// $db = new Database($config['DATABASE']);
// $posts  = $db->query('select * from posts')->fetchAll();

require_once  '../app/Config/Route.php';
