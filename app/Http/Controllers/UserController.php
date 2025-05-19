<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return view('userForm');
    }

    public function viewData() {
        $users = User::get();
        return view('user', compact('users'));
    }

    // reading with databaes using models
    public function insertUser(Request $request) {
        // create new object for models
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        // to save data using models
        if ($user->save()) {
            return redirect()->route('user.view');
        } else {
            return "error happened";
        }
    }

}
