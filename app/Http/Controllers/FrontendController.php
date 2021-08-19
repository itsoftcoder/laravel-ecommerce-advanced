<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\MenuList;
use App\Product;
use App\Brand;

class FrontendController extends Controller
{
    public function Welcome()
    {
    	$menuLists = MenuList::with('categorys')->get();
    	$categorys  = Category::all();
        $brands = Brand::all(); 
        return view('welcome',compact('menuLists','categorys','brands'));
    }

    public function ProductDetails($slug="")
    {
    	$product = Product::whereSlug($slug)->firstOrFail();
    	return view('frontend.product.product-details',compact('product'));
    }

    public function Shop($filter="id")
    {
        $categorys = Category::all();
        $products = Product::orderBy($filter,'desc')->paginate(20);
        return view('frontend.product.shop',compact('products','categorys'));
    }
}
