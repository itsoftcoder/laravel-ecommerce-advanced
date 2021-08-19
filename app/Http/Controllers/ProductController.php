<?php

namespace App\Http\Controllers;

use App\Product;
use App\SubCategory;
use App\Brand;
use App\Tag;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Faker\Provider\Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subCategories = SubCategory::all();
        $brands = Brand::all();
        $tags = Tag::all();
        return view('backend.product.create',compact('subCategories','brands','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'product_name' => 'required | min:2 | unique:products,product_name',
            'product_price' => 'required | min:1 | integer',
            'product_type' => 'required',
            'status' => 'required',
            'product_quantity' => 'required | integer',
            'subCategory' => 'required',
            'short_description' => 'required',
            'full_description' => 'required',
            'product_thumbnail' => 'required | image',
            'brand' => 'required',
        ]);

        $file = $request->file('product_thumbnail');
        $extension = $file->getClientOriginalExtension();

        $file_name = time().".".$extension;
        $file->storeAs('public/uploads/product-photos/',$file_name);

         $slug = uniqid();
        $product = new Product();
        $product->sub_category_id = $request->subCategory;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_old_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->size = $request->size;
        $product->status = $request->status;
        $product->product_type = $request->product_type;
        $product->color = $request->color;
        $product->brand_id = $request->brand;
        $product->slug = md5($slug);
        $product->short_description = $request->short_description;
        $product->full_description  = $request->full_description;
        $product->product_thumbnail = $file_name;
        
        $product->save();

        $tags = Str::of($request->tag)->explode(',');

        foreach ($tags as $value) {
            $tag  = Tag::insertGetId([
            'name' => $value,
            'created_at' => Carbon::now(),
           ]);
           
           $product->tags()->attach($tag);
        }  

       return redirect('admin/product')->with('status','product and photo uploaded has been succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
