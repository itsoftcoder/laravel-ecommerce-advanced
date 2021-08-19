<?php

namespace App\Http\Controllers;

use App\MenuList;
use Illuminate\Http\Request;
use Auth;

class MenuListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuLists = MenuList::with('user')->get();
        return view('backend.menu-list.index',compact('menuLists'));
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
          'name' => 'required | unique:menu_lists,name',
          'icon_name' => 'required',
        ]);
     
        $menuList = new MenuList();
        $menuList->user_id = Auth::id();
        $menuList->name = $request->name;
        $menuList->icon_name = $request->icon_name;
        $menuList->save();
        
        return back()->with(['status'=>'Menu Added Successfully','type'=>'success','bg'=>'#f96868']); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MenuList  $menuList
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (MenuList::findOrFail($id)->delete()) {
            return redirect()->route('menulist.index')->with(['status'=>'Menu has been Deleted Successfully','type'=>'success','bg'=>'#00ffff']);
        }else{
             return back()->with(['status'=>'Something Went to Wrong','type'=>'warning','bg'=>'#ffff00']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuList  $menuList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menuLists = MenuList::with('user')->get();
        $menuList_show = MenuList::findOrFail($id);
        return view('backend.menu-list.index',compact('menuLists','menuList_show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuList  $menuList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
          "name" => "required | unique:menu_lists,name,$id",
          "icon_name" => "required",
        ]);
     
        $menuList = MenuList::findOrFail($id);
        $menuList->user_id = Auth::id();
        $menuList->name = $request->name;
        $menuList->icon_name = $request->icon_name;
        $menuList->save();
        
        if($menuList->save()){
            return back()->with(['status'=>'Menu Update Successfully','type'=>'success','bg'=>'#f96868']);
        }else{
            return back()->with(['status'=>'Something Went to Wrong,Please try Again','type'=>'warning','bg'=>'#ff00ff']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuList  $menuList
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuList $menuList)
    {
        //
    }
}
