<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function create(){
        return view('categories.create');
    }

    public function store(Request $request) {
        $validate=$request->validate([
            'type'=>'required|unique:categories,type',
            'price'=>'required',
            'usage'=>'required']);
            $category= Category::create($validate); 
            return redirect()->back()->with('success','category created');
    }
}
