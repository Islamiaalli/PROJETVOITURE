<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\TagCar;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars=Car::all();
        return view('cars.index',compact('cars')); 
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        $tagcars=TagCar::all();
        return view('cars.create',compact('categories','tagcars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //dd($request->request);
        $validate=$request->validate([
            'immat'=>'required|unique:cars,immat',
            'brand'=>'required',
            'color_car'=>'required',
            'energy'=>'required',
            'number'=>'required',
            'category_id'=>'required',
            'tag_id' => 'required'
        ]);
         $car= Car::create($validate)->id;
         $tags = $request->input('tag_id');
            foreach ( $tags as $tag) {
                 $tagCar = TagCar::create([
                    'car_id'=> $car,
                     'tag_id'=>$tag
                 ]);
             }
        return redirect()->back()->with('success','car created');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $categories=Category::all();
        $tagcars=TagCar::all();
        $categories=Category::all();
        return view('cars.edit',compact('car','categories','tagcars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Car $car)
    {
        //
        $validate=$request->validate([
            'immat'=>'required',
            'brand'=>'required',
            'color_car'=>'required',
            'energy'=>'required',
            'number'=>'required',
            'category_id'=>'required']);
            //dd($validate);
            $car->update($validate);
            foreach($car->TagCars() as $tagcar){
                $tagcar->delete();
            }
            $tags = $request->input('tag_id');
            foreach ( $tags as $tag) {
                 $tagCar = TagCar::create([
                    'car_id'=> $car->id,
                     'tag_id'=>$tag
                 ]);
             }
        return redirect()->route('cars.index')->with('sucess','Car updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
        $car->delete();
        return redirect()->back()->with('success','Car deleted');

    }
}
