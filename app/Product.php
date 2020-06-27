<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['image' , 'name' , 'cover' , 'aboutimg' , 'about' , 'utilityimg' , 'utility'];
}
