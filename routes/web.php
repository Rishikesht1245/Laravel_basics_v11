<?php

use Illuminate\Support\Facades\Route;

/* we need to mention the class name and method to
 invoke as an array */
Route::get('/', [welcomeController::class, "welcome"])->name("welcome");
