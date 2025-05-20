<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    protected $fillable = [name, skill, bio];
    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;
}


// first we should while using eloquent is alwaays  make protected $fillable which gonna be use for it 

// learned about tinker today 