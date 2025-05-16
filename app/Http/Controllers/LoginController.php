<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;

class LoginController extends Controller
{
    // method for index or view
    public function index() {
        return view('login');
    }

    //method for get value
    public function store(LoginFormRequest $request) {

        // // access all the value of request
        // $value = $request->all();

        // flash message
        return redirect()->back()->with('success', 'form successfully submitted');


        // // Redirect to home route with flashed session data
        // return view('profile')->with('value', $value);
    }
}
