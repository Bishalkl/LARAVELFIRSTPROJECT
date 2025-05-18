<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// so we can loading apis manulally 
// first prefix, middleware, group()
Route::prefix('api')->middleware('api')->group(base_path('routes/api.php'));


// creating routes
Route::get('/', function() {
    return view('welcome');
});



// Seeder

// Laravel includes the ability to seed your database with data using seed classes. All seed classes are stored in the database/seeders directory.By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.


// Writing seeders
// To create seeder file we can use php artisan command
// command: php artisan make:seeder UserSeeder 

// in database/seeders/seederfile created
// create DB::table('tablename')->insert([create dummy data here]);
// add the essential use path of top for example Str, facade/DB file for every of this
// after this we have run the command to seed it to database
// command: php artisan make:seed --class=Seederfile 
// it is good for seed the data but so minimum amount of dummy data we do so it comes factory.
// command php artisan db:seed



// Writing factory
// To create factory file we can use php artisan command
// command: php artisan make:factory UserFactory

// after that database/factories/factoryfile
// to implement the factory should have models 
    // in factory file shoud be protected $models = modelsfils::class
// add the fake column datatype in defination() array function
// and in modelfile should have to protected = fillable and useFactory and notifiable
// add that factory file to the seed and use as seed it will create number of data







