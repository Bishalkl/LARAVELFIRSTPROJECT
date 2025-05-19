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



// today for models
// how to create modesl
// php artisan command
// command: php artisan make:model Products
// naming convection is should have to be same as a table but first character should be Capital 
// after create model it will be in App\Models\filename we have created 


// how to interaction models with routes


// working flow with models is to by using controllers for it for example method of controller can use models and after that routes use controller models->controllers->routes
// to get the users data from models is $users = Users::get(); which return $users and that models interactive with controller and after controller interact with routs
// we can also pass the value using the compact, with, traditional to the view via controller interacting with routes and models where controller became middle man for both routes, and models




// how to interaction models with routes
Route::get('/users', [UserController::class, 'index'])->name('user.index');

// now for insert should i have add 
Route::post('/users', [UserController::class, 'insertUser'])->name('user.post');

// list routes
Route::get('/users/list', [UserController::class, 'viewData'])->name('user.view');









