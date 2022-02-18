<?php

declare(strict_types=1);

use Slim\App;

require_once __DIR__. "/../vendor/autoload.php";

//Settings and initilize App
$settings = require_once  __DIR__ ."/settings.php";
$app = new App($settings);
$container = $app->getContainer();

//Load custom error handler
require_once __DIR__. '/errorHandler.php';

//Load classes for Routes
$routeContainers = require_once __DIR__. '/routecontainers.php';
$routeContainers($container);

//Load routes + DB + middleware
require_once __DIR__. '/routes.php';
require_once __DIR__."/database.php";
$middleware = require_once __DIR__."/middleware.php";
$middleware($app);

$app->run();