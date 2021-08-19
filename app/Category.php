<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MenuList;
use App\SubCategory;
use App\User;

class Category extends Model
{
   
   public function menuList(){
   	return $this->belongsTo(MenuList::class);
   }

    public function subCategorys(){
    	return $this->hasMany(SubCategory::class);
    }


    public function user(){
    	return $this->belongsTo(User::class);
    }
}
