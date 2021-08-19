<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class MenuList extends Model
{
    public function categorys(){
    	return $this->hasMany(Category::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
