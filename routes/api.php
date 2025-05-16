<?php
use Illuminate\Support\Facades\Route;

// defiine the apis in apis.php
Route::get('/hello', function () {
    return response()->json(['message' => 'API is working!']);
});

Route::get('/dashboard', function() {
    return response()->json(['message' => 'DashBoard apis is working']);
});
