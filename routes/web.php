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

// migration is make it easier to learn whene we work with group of people


// to create new migration
   // command: php artisan make:migration create_tablename


// now have to go the migration file that created under database folder in laravel and there will be void function one is up and down function where we can create a different schemas related to the table like Column types, default values, nullable, foreign keys​.

// now have to run the migration command to run it and it will create if the database is connected perfectly but one warning " $table->timestamps(); " even we have created timestamp other column
// command: php artisan migrate

// rollback
// we can also rollback one step mean we can undo the table that created recently one step 
// command: php artisan migrate:rollback 
// if i have rollback other step we can do it command: php artisan mirgrate:rollback --step 1 or any()
// can also migrate again rolled back part


// migrate specific file
// We can also migrate specific file or table we created 
// command: php artisan migrate --path=databasefolder/migrationfolder/fileofit shortcut key for copy relative file path by = ctrl+shift+alt+c

// refresh migrationain migrate by php migrate 
// it rollback all the table in database and migrate the table by running 
// command: php artisan migrate:refresh


// reset migration by php artisan migrate
// delete all migration table from database 
// only remain migration named table in database 
// command: php artisan migrate:reset






