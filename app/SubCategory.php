<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Proudct;
use App\User;

class SubCategory extends Model
{
    public function category(){
    	return $this->belongsTo(Category::class);
    }
    
    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
