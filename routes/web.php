<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// normal routes which return the view of blade file 
Route::get('/', function () {
    return view('welcome');
});

// // create get request if we use we can trigger any kind of request
// Route::any('/login', function() {
//         // return "hi"; simple return something

//         // using response for and using it 
//         // return response("<h1>Hello, I am login</h1>", 200, ["Content-Type" => "text"]);

//         // Instead of using that arrow use header function using application content type
//         return response("<h1>Hello, I am login</h1>", 200)->header("Content-Type", "application/json");


// });


// // redirect routes
// // redirect r1 to r2
// Route::redirect('/r1', '/r2', 301);
// // create route for r2 and it's working redirected to r2 if we clicked to r1 path 
// // status code for redirect is 301 for Moved Permanently redirect and 302 is temporarily redirect
// Route::get('/r2', function() {
//     return "This is r2 route";
// });

// // View route using view to targe the blade file and with url
// Route::view('/welcome', 'welcome');
// // in View route we can also pass the value
// Route::view('/home', 'home', ['name'=> 'Bishal']);


// // Route Parameters

// // Requred Parameters adding constrant by where 
// Route::get('/user/{id?}', function($id=4){
//     return $id;
// })->where('id', '[0-9]+');


// // Named Routes
// Route::get('/user/profile/{name?}', function($name='bishal'){
//     return "My name is {$name}.";
// })->name("userProfileName");

// // Routes Group while using prefix and middleware auth for authentication and guest for normal
// Route::prefix("user")->middleware("guest")->group(function () {
//     Route::view('/home', 'home', ['name' => 'Bishal']);
// });

// // if we gave the name the route with prefexi we should use .at the end in prefix value the and 
// Route::prefix("admin.")->group(function() {
//     Route::get('/users', function() {
//         return 'admin.user';
//     })->name("userss");
// });


// // cache routes
// // php artisan route;cache

// // clear routes
// // php artisan route:clear



// // Request class and use Illuminates\Http\Request; and use dd for detail in browser
// Route::get("search", function(Request $request) {
//     dd($request->name);
// });

// // To integrate the api.php for apis build, have to manually add to the web.php for this 
// Route::prefix('api')->middleware('api')->group(base_path('routes/api.php'));



// using php artisan command for create controller
// php artisan make:controller name of Controller

// specifying the AuthController in routes
Route::get('/login', [AuthController::class, "login"]);

// Specifying the UserController that pass parameter and to the method and do operation and it could be multiple and single, doesn't matter but should use constrant on both
Route::get('/user/{id?}/{name?}', [UserController::class, "userId"])
          ->where('id', '[0-9]+')
          ->where('name', '[A-Z-a-z]+');


// Single action controller doesn't have any kind of method only one invoke function
// php artisan command to create invokable function or single action controller
// php artisan make:controller controllername "which is normal is not real controller like name for example "someting Controller" it is "specific name like "ShowProfile"  -- invokable"
route::get('/profile', ShowProfile::class);
