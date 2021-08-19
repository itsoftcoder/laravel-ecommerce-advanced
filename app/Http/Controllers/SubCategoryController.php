<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use App\Category;
use Auth;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategorys = SubCategory::with('user','category')->get();
        $categorys = Category::all();
        return view('backend.sub-category.index',compact('categorys','subCategorys'));
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
          'name' => 'required',
          'category' => 'required',
        ]);
     
        $subCategory = new SubCategory();
        $subCategory->user_id = Auth::id();
        $subCategory->name = $request->name;
        $subCategory->category_id = $request->category;
        $subCategory->save();
        
        return back()->with(['status'=>'Sub Category Added Successfully','type'=>'success','bg'=>'#f96868']); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (SubCategory::findOrFail($id)->delete()) {
            return redirect()->route('subCategory.index')->with(['status'=>'Sub Category has been Deleted Successfully','type'=>'success','bg'=>'#00ffff']);
        }else{
             return back()->with(['status'=>'Something Went to Wrong','type'=>'warning','bg'=>'#ffff00']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorys = Category::all();
        $subCategorys = SubCategory::with('user','category')->get();
        $subCategory_show = SubCategory::findOrFail($id);
        return view('backend.sub-category.index',compact('subCategorys','subCategory_show','categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
          "name" => "required | unique:sub_categories,name,$id",
          "category" => "required",
        ]);
     
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->user_id = Auth::id();
        $subCategory->name = $request->name;
        $subCategory->category_id = $request->category;
        $subCategory->save();
        
        if($subCategory->save()){
            return back()->with(['status'=>'Sub Category Update Successfully','type'=>'success','bg'=>'#f96868']);
        }else{
            return back()->with(['status'=>'Something Went to Wrong,Please try Again','type'=>'warning','bg'=>'#ff00ff']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
