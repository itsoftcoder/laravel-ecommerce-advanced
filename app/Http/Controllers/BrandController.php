<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('backend.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
          'name' => 'required | unique:brands,name',
          'logo' => 'required | image', 
        ]);

        $file = $request->file('logo');
        $extension = $file->getClientOriginalExtension();

        $file_name = time().".".$extension;
        $file->storeAs('public/uploads/brand-logos/',$file_name);
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->logo = $file_name;
        $brand->save();
        
        return back()->with(['status'=>'Brand Added Successfully','type'=>'success','bg'=>'#f96868']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Brand::findOrFail($id)->delete()) {
            return redirect()->route('brand.index')->with(['status'=>'Brand has been Deleted Successfully','type'=>'success','bg'=>'#00ffff']);
        }else{
             return back()->with(['status'=>'Something Went to Wrong','type'=>'warning','bg'=>'#ffff00']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::all();
        $brand_show = Brand::findOrFail($id);
        return view('backend.brand.index',compact('brand_show','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
          "name" => "required | unique:brands,name,$id",
        ]);
        $brand = Brand::findOrFail($id);

        if ($request->hasFile('logo')) {
                 if (Storage::delete('public/uploads/brand-logos/'.$brand->logo)) {
                    $file = $request->file('logo');
                    $extension = $file->getClientOriginalExtension();

                    $file_name = time().".".$extension;
                    $file->storeAs('public/uploads/brand-logos/',$file_name);
                    $brand->name = $request->name;
                    $brand->logo = $file_name;
                    if($brand->save()){
                       return back()->with(['status'=>'Brand Update Successfully','type'=>'success','bg'=>'#f96868']);
                    }else{
                        return back()->with(['status'=>'Something Went to Wrong,Please try Again','type'=>'warning','bg'=>'#ff00ff']);
                    }
                 }else{
                     return back()->with(['status'=>'Something Went to Wrong,Please try Again','type'=>'warning','bg'=>'#ff00ff']);
                 }
             }else{
                $brand->name = $request->name;
                if($brand->save()){
                   return back()->with(['status'=>'Brand Update Successfully','type'=>'success','bg'=>'#f96868']);
                }else{
                    return back()->with(['status'=>'Something Went to Wrong,Please try Again','type'=>'warning','bg'=>'#ff00ff']);
                }
             } 

        
        
        
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
