<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// so we can loading apis manulally 
// first prefix, middleware, group()
Route::prefix('api')->middleware('api')->group(base_path('routes/api.php'));


// creating routes
Route::get('/', function() {
    return view('welcome');
});



// how to interaction models with routes
Route::get('/index', [UserController::class, 'index'])->name('user.index');

// view all the data in blade 
Route::get('/', [UserController::class, 'viewData'])->name('user.view');

// now for insert should i have add 
Route::post('/user/insert', [UserController::class, 'insertUser'])->name('user.insert');

// lets' edit routes for update data and view interface
Route::get('/user/{userId}/edit', [UserController::class, 'editUser'])->name('user.edit');

// now for update
Route::put('/user/{userId}/udpate', [UserController::class, 'updateUser'])->name('user.update');

// now for delete or destroy
Route::delete('/user/{userId}/delete', [UserController::class, 'deleteUser'])->name('user.destroy');


// pagination 
// one is paginate()
// two is simplePaginate()
// cursor Paginate()

// how to use 
// $users = User::All()->paginate(5);
// $users = User::All()->simplePaginate(5); //default 15 data
// $users = User::All()->orderBy('id')->cursorPaginate(5);
// difference between cursor and other pagination is fast is cursor by indexing and need order way but also cause effect in ram and serve if we use cursor show that it is not popular for automatic data loaded use cursor pagination 

// {{ to add the $data->link() }} in blade 













