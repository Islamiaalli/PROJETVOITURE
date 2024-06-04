<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable=[
        'tag_name',
    ];

    use HasFactory;
    public function TagCars(){
        return $this ->hasMany(TagCar::class);
    }
}
