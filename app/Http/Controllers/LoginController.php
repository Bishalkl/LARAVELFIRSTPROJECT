<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // method for index or view
    public function index() {
        return view('login');
    }

    //method for get value
    public function handleLogin(Request $request) {
        // access all the value of request
        $value = $request->all();

        // Redirect to home route with flashed session data
        return view('profile')->with('value', $value);
    }
}
