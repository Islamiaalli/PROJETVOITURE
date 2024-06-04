<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable=[
        'immat',
        'brand',
        'color_car',
        'energy',
        'number',
        'category_id',
    ];

    public function category(){
        return $this ->belongsTo(Category::class); 
    }
    use HasFactory;
    public function TagCars(){
    return $this ->hasMany(TagCar::class);
    }
}
