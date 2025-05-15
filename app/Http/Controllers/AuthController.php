<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // create a method normal function in controller class that i have created 
    public function login() {
        return view("login");
    }
}


// PHP Artisan command to create a basic controller
    // php artisan make:controller AuthController

