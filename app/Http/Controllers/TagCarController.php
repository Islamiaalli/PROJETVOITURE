<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Car;
use App\Models\TagCar;


class TagCarController extends Controller
{
    public function create()
    {
        $tags = Tag::all();
        $cars = Car::all();
        return view('tags.tagcar', compact('tags', 'cars'));
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'tag_id' => 'required',
            'car_id' => 'required'
        ]);
        $tags = $request->input('tag_id');
        //dd($request->all());
        $car=$request->input('car_id');
        foreach ( $tags as $tag) {
            $tagCar = TagCar::create([
                'car_id'=> $car,
                'tag_id'=>$tag
            ]);
        }
        return redirect()->back()->with('success', 'Tag created');
    }
}
