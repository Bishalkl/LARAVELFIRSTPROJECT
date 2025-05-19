<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return view('userForm');
    }

    public function updateForm() {
        return view('userUpdate');
    }

    public function viewData() {
        $users = User::get();
        return view('user', compact('users'));
    }

    // insert data  with databaes using models
    public function insertUser(Request $request) {
        // create new object for models
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
       
        // to save data using models
        if ($user->save()) {
            return redirect()->route('user.view');
        }
        return "error occured";
    }

    // to update we need editview
    public function editUser($userId) {
        $user = User::where('id', $userId)->first();
        return view('userUpdate', compact('user'));
    }

    // update data with database using models 
    public function updateUser(Request $request, $userId) {
        // first get the data using id
        $user = User::where('id', $userId)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($user->save()) {
            return redirect()->route('user.view');
        }
        return "error occured";
    }


}
