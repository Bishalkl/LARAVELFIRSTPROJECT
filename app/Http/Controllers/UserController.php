<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // method also used for pass the value on this method
    public function userId($userId = 12, $userName = "Bishal") {
        return "Your user id and name is {$userId} and {$userName} respectively.";
    }
}
