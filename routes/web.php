<?php

use Illuminate\Support\Facades\Route;
use App\Category;
use App\SubCategory;
use App\MenuList;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontendController@Welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->group(function(){
	Route::resource('/menulist','MenuListController');
	Route::resource('/category','CategoryController');
	Route::resource('/subCategory','SubCategoryController');
	Route::resource('/brand','BrandController');
	Route::resource('/tag','TagController');
	Route::resource('/product','ProductController');
});

Route::prefix('/users')->group(function(){
	Route::get('/product-details/{slug}','FrontendController@ProductDetails')->name('product_details');
	Route::get('/shop/{filter?}','FrontendController@Shop')->name('shop');
});
