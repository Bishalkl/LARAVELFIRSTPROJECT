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
        $users = User::paginate(5);
        // $users = User::All()->simplePaginate(5); //default 15 data
        // $users = User::All()->orderBy('id')->cursorPaginate(5);

        return view('user', compact('users'));
    }

    // insert data  with databaes using models
    public function insertUser(Request $request) {
        // using eloquent method 
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('user.view');
    }

    // to update we need editview
    public function editUser($userId) {
        $user = User::where('id', $userId)->first();
        return view('userUpdate', compact('user'));
    }

    // update data with database using models 
    public function updateUser(Request $request, $userId) {
        // update
        User::where('id', $userId)->upated(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
        return redirect()->route('user.view');
    }

    // to delete the user data
    public function deleteUser($userId) {
        // directly delete by condition 
        User::where('id', $userId)->delete();
        return redirect()->route('user.view');
    }


}
