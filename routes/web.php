<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// so we can loading apis manulally 
// first prefix, middleware, group()
Route::prefix('api')->middleware('api')->group(base_path('routes/api.php'));


Route::get('/', function() {
    return view('welcome');
});