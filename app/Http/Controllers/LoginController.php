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
    public function store(Request $request) {


        // manually validation for validate it 
         $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);
        // // access all the value of request
        // $value = $request->all();

        // flash message
        return redirect()->back()->with('success', 'form successfully submitted');



        // // Redirect to home route with flashed session data
        // return view('profile')->with('value', $value);
    }
}
