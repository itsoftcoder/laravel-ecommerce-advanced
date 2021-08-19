<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;
use App\Brand;
use App\Tag;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_thumbnail'];
    public function subCategory()
    {
    	return $this->belongsTo(SubCategory::class);
    }

    public function brand()
    {
    	return $this->belongsTo(Brand::class);
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag','product_tags');
    }
}
