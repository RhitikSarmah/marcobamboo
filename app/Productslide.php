<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productslide extends Model
{
    protected $fillable = ['slide' , 'product_name'];
    public function productslides(){
    	return $this->belongsTo(Product::class);
    }
}
