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

// for get data we use ModelsName::get();
// for insert dta we use by create new object of model and insert the data
// for update we use first edit function by getting form with old value with route udateuser and update it 
// to get id for update: ModelName:where('id', $userId)->first();
// for delete i have used same hat edit where the view got to form button for update and one for delete where first form got @method('PUT) another form got @method('DELETE');
// for delete models code is : $user->delete();




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











