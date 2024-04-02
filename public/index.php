<?php

use Illuminate\Http\Request;

// define constant : used for measuring the execution time.
define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
/* This line includes (require) the Composer autoloader file,
 which is responsible for automatically loading PHP classes 
 and dependencies defined in the composer.json file of your 
 Laravel project. */
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/* Captures the request and passes it to teh application for
   processing Laravel's kernel : (Traffic officer for incoming 
   HTTP requests) then routes the requests to the appropriate 
   controller and method based on the URL route definitions 
   in your application */
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
