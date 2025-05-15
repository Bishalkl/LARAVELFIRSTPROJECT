<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ShowProfile;

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::view('master', 'master');
Route::view('/', 'welcome');

// create route
Route::get('/user/{value?}', function($value = null) {
    // old version to pass the value 
    // return view('home', ['value' => $value]);
    // new version use with to value pass 
    return view('home')->with(['value'=> $value]);
})->where('value', '[a-z-A-Z]+');




