<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// normal routes
Route::get('/home', function() {
    return view('home');
});

// Named routes
Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');


// Route Parameters
Route::get('/user/{id}', function($id) {
    return "User ID:$id";
});

// Optional parameter
Route::get('/users/{name?}', function($name = "Bishal") {
    return "User Name: $name";
});

// Routes Groups
// For applying middleware, prefix, or namespace
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function() {
        return view('profile');
    });
});