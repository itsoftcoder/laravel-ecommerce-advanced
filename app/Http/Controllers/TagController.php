<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('backend.tag.index',compact('tags'));
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
          'name' => 'required | unique:tags,name',
        ]);
     
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        
        return back()->with(['status'=>'Tag Added Successfully','type'=>'success','bg'=>'#f96868']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Tag::findOrFail($id)->delete()) {
            return redirect()->route('tag.index')->with(['status'=>'Tag has been Deleted Successfully','type'=>'success','bg'=>'#00ffff']);
        }else{
             return back()->with(['status'=>'Something Went to Wrong','type'=>'warning','bg'=>'#ffff00']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::all();
        $tag_show = Tag::findOrFail($id);
        return view('backend.tag.index',compact('tag_show','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
          "name" => "required | unique:brands,name,$id",
        ]);
     
        $tag = Tag::findOrFail($id);
        $tag->name = $request->name;
        if($tag->save()){
            return back()->with(['status'=>'Tag Update Successfully','type'=>'success','bg'=>'#f96868']);
        }else{
            return back()->with(['status'=>'Something Went to Wrong,Please try Again','type'=>'warning','bg'=>'#ff00ff']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
