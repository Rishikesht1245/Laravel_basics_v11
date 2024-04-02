<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    // function retruns the welcome view
    public function welcome(){
        return view("welcome");
    }
}
