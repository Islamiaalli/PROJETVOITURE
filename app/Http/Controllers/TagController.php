<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function create(){
        return view('tags.create');
    }


    public function store(Request $request) {
        //dd($request->request);
        $validate=$request->validate(['tag_name'=>'required|unique:tags,tag_name']);
        //dd($validate);
        $tag= Tag::create($validate); 
        return redirect()->back()->with('success','tag created');
    }
}
