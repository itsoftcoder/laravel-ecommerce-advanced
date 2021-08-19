<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\MenuList;
use Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::with('user','menuList')->get();
        $menuLists = MenuList::all();
        return view('backend.category.index',compact('categorys','menuLists'));
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
          'name' => 'required | unique:categories,name',
          'menu' => 'required',
        ]);
     
        $category = new Category();
        $category->user_id = Auth::id();
        $category->name = $request->name;
        $category->menu_list_id = $request->menu;
        $category->save();
        
        return back()->with(['status'=>'Category Added Successfully','type'=>'success','bg'=>'#f96868']); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Category::findOrFail($id)->delete()) {
            return redirect()->route('category.index')->with(['status'=>'Category has been Deleted Successfully','type'=>'success','bg'=>'#00ffff']);
        }else{
             return back()->with(['status'=>'Something Went to Wrong','type'=>'warning','bg'=>'#ffff00']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menuLists = MenuList::all();
        $categorys = Category::with('user','menuList')->get();
        $category_show = Category::findOrFail($id);
        return view('backend.category.index',compact('menuLists','category_show','categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
          "name" => "required | unique:categories,name,$id",
          "menu" => "required",
        ]);
     
        $category = Category::findOrFail($id);
        $category->user_id = Auth::id();
        $category->name = $request->name;
        $category->menu_list_id = $request->menu;
        
        
        if($category->save()){
            return back()->with(['status'=>'Category Update Successfully','type'=>'success','bg'=>'#f96868']);
        }else{
            return back()->with(['status'=>'Something Went to Wrong,Please try Again','type'=>'warning','bg'=>'#ff00ff']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        
    }
}
